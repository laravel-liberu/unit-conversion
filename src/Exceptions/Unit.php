<?php

namespace LaravelLiberu\UnitConversion\Exceptions;

use Exception;

class Unit extends Exception
{
    public static function invalid(string $unit): self
    {
        return new self(__('Invalid unit ":unit" for conversion', ['unit' => $unit]));
    }
}
