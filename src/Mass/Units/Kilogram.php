<?php

namespace LaravelEnso\UnitConversion\Mass\Units;

use LaravelEnso\UnitConversion\Services\Unit;

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
