<?php

namespace SRC\DTOs;

use SRC\Interfaces\IFromArray;
use SRC\Interfaces\IToDTO;
use SRC\Models\Base;
use SRC\Models\Role;

class RoleDTO extends BaseDTO implements IToDTO, IFromArray
{
  public function __construct(
    public ?int $id,
    public ?string $description,
    public ?string $slug,
  ) {
    parent::__construct(id: $id);
  }

  public static function toDTO(Role|Base $model): RoleDTO
  {
    return new RoleDTO(
      id: $model->id,
      description: $model->description,
      slug: $model->slug,
    );
  }

  public static function fromArray(array $data): RoleDTO
  {
    return new RoleDTO(
      id: $data['id'],
      description: $data['description'],
      slug: $data['slug'],
    );
  }
}