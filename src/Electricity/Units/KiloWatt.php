<?php

namespace LaravelEnso\UnitConversion\Electricity\Units;

use LaravelEnso\UnitConversion\Services\Unit;

class KiloWatt extends Unit
{
    public static function label(): string
    {
        return 'kilowatt';
    }

    public static function symbol(): string
    {
        return 'kW';
    }

    public static function factor(): float
    {
        return 1000;
    }
}
