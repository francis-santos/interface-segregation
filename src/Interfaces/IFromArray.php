<?php

namespace SRC\Interfaces;

use SRC\DTOs\BaseDTO;

interface IFromArray
{
  public static function fromArray(array $data): BaseDTO;
}
