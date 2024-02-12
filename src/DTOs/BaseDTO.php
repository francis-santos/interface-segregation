<?php

namespace SRC\DTOs;

class BaseDTO
{
  public function __construct(
    public ?int $id,
  ) {}
}