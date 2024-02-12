<?php

namespace SRC\Requests;

class Request
{
  public function __construct(
    public ?int $id,
  ) {}
}