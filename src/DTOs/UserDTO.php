<?php

namespace SRC\DTOs;

use SRC\Interfaces\IFromRequest;
use SRC\Interfaces\IToDTO;
use SRC\Interfaces\IToModel;
use SRC\Models\Base;
use SRC\Models\Role;
use SRC\Models\User;
use SRC\Requests\Request;
use SRC\Requests\UserRequest;

class UserDTO extends BaseDTO implements IFromRequest, IToModel, IToDTO
{
  public function __construct(
    public ?int $id,
    public ?string $name,
    public ?string $email,
    public ?RoleDTO $role,
  ) {
    parent::__construct(id: $id);
  }

  public static function fromRequest(UserRequest|Request $request): UserDTO
  {
    return new UserDTO(
      id: $request->id,
      name: $request->name,
      email: $request->email,
      role: null,
    );
  }

  public static function toModel(UserDTO|BaseDTO $dto): User
  {
    return new User(
      id: $dto->id,
      name: $dto->name,
      email: $dto->email,
      roleId: $dto->role->id,
    );
  }

  public static function toDTO(User|Base $model): UserDTO
  {
    return new UserDTO(
      id: $model->id,
      name: $model->name,
      email: $model->email,
      role: RoleDTO::toDTO(model: new Role(
        id: $model->roleId,
        description: 'Administrator',
        slug: 'admin',
      )),
    );
  }

  public function __toString(): string
  {
    $role = !empty($this->role) ? $this->role->description : '-';
    return "ID: $this->id | Name: $this->name | Email: $this->email | Role: $role";
  }
}
