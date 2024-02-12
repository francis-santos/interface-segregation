<?php

namespace SRC\Interfaces;

use SRC\DTOs\BaseDTO;
use SRC\Models\Base;

interface IToDTO
{
  public static function toDTO(Base $model): BaseDTO;
}
