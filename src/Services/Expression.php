<?php

namespace LaravelEnso\UnitConversion\Services;

use LaravelEnso\UnitConversion\Exceptions\Expression as Exception;

class Expression
{
    public static function validate(string $expression): void
    {
        preg_match('/[+-]?([0-9]*[.])?[0-9]+ [a-z]+/', $expression, $matches);

        if (count($matches) !== 1 || $matches[0] !== $expression) {
            throw Exception::invalid($expression);
        }
    }
}
