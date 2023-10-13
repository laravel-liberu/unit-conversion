<?php

namespace LaravelLiberu\UnitConversion\Exceptions;

use Exception;

class Expression extends Exception
{
    public static function invalid(string $expression): self
    {
        return new self(__('Invalid expression ":expression" for conversion', ['expression' => $expression]));
    }
}
