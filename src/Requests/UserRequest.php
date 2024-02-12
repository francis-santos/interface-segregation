<?php

namespace SRC\Requests;

class UserRequest extends Request
{
  public function __construct(
    public ?int $id,
    public ?string $name,
    public ?string $email,
  ) {
    parent::__construct(id: $id);
  }
}
