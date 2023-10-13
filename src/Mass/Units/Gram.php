<?php

namespace LaravelLiberu\UnitConversion\Mass\Units;

use LaravelLiberu\UnitConversion\Services\Unit;

class Gram extends Unit
{
    public static function label(): string
    {
        return 'gram';
    }

    public static function symbol(): string
    {
        return 'g';
    }

    public static function factor(): float
    {
        return 1E-3;
    }
}
