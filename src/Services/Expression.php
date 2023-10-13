<?php

namespace LaravelLiberu\UnitConversion\Services;

use LaravelLiberu\UnitConversion\Exceptions\Expression as Exception;

class Expression
{
    public static function validate(string $expression): void
    {
        preg_match('/[+-]?\d*\.?\d+ \w+/', $expression, $matches);

        if (count($matches) !== 1 || $matches[0] !== $expression) {
            throw Exception::invalid($expression);
        }
    }
}
