<?php

namespace LaravelEnso\UnitConversion\Length\Units;

use LaravelEnso\UnitConversion\Services\Unit;

class Kilometer extends Unit
{
    public static function label(): string
    {
        return 'kilometer';
    }

    public static function symbol(): string
    {
        return 'km';
    }

    public static function factor(): float
    {
        return 1E3;
    }
}
