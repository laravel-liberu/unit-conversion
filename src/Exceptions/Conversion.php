<?php

namespace LaravelLiberu\UnitConversion\Exceptions;

use Exception;

class Conversion extends Exception
{
    public static function incompatible(string $unit): self
    {
        return new self(__('Invalid unit :unit for conversion', ['unit' => $unit]));
    }
}
