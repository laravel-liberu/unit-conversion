<?php

namespace LaravelEnso\UnitConversion\Electricity\Units;

use LaravelEnso\UnitConversion\Services\Unit;

class Watt extends Unit
{
    public static function label(): string
    {
        return 'watt';
    }

    public static function symbol(): string
    {
        return 'W';
    }

    public static function factor(): float
    {
        return 1;
    }
}
