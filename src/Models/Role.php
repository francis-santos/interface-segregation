<?php

namespace SRC\Models;

class Role extends Base
{
  public function __construct(
    public ?int $id,
    public ?string $description,
    public ?string $slug,
  ) {
    parent::__construct(id: $id);
  }
}