<?php

namespace SRC\Interfaces;

use SRC\DTOs\BaseDTO;
use SRC\Models\Base;

interface IToModel
{
  public static function toModel(BaseDTO $dto): Base;
}
