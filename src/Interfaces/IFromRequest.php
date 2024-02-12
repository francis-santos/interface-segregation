<?php

namespace SRC\Interfaces;

use SRC\DTOs\BaseDTO;
use SRC\Requests\Request;

interface IFromRequest
{
  public static function fromRequest(Request $request): BaseDTO;
}
