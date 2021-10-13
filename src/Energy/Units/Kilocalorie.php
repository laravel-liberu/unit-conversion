<?php

namespace LaravelEnso\UnitConversion\Energy\Units;

use LaravelEnso\UnitConversion\Services\Unit;

class Kilocalorie extends Unit
{
    public static function label(): string
    {
        return 'kilocalorie';
    }

    public static function symbol(): string
    {
        return 'kcal';
    }

    public static function factor(): float
    {
        return 4184;
    }
}
