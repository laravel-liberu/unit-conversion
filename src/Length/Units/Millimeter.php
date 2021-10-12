<?php

namespace LaravelEnso\UnitConversion\Length\Units;

use LaravelEnso\UnitConversion\Services\Unit;

class Millimeter extends Unit
{
    public static function label(): string
    {
        return 'millimeter';
    }

    public static function symbol(): string
    {
        return 'mm';
    }

    public static function factor(): float
    {
        return 1E-3;
    }
}
