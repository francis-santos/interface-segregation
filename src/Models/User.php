<?php

namespace SRC\Models;

class User extends Base
{
  public function __construct(
    public ?int $id,
    public ?string $name,
    public ?string $email,
    public ?int $roleId = null,
  ) {
    parent::__construct(id: $id);
  }

  public function __toString(): string
  {
    return "ID: $this->id | 
      Name: $this->name | 
      Email: $this->email | 
      RoleId: $this->roleId";
  }
}
