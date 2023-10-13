<?php

namespace LaravelLiberu\UnitConversion\Mass\Units;

use LaravelLiberu\UnitConversion\Services\Unit;

class Kilogram extends Unit
{
    public static function label(): string
    {
        return 'kilogram';
    }

    public static function symbol(): string
    {
        return 'kg';
    }

    public static function factor(): float
    {
        return 1;
    }
}
