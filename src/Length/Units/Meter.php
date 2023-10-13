<?php

namespace LaravelLiberu\UnitConversion\Length\Units;

use LaravelLiberu\UnitConversion\Services\Unit;

class Meter extends Unit
{
    public static function label(): string
    {
        return 'meter';
    }

    public static function symbol(): string
    {
        return 'm';
    }

    public static function factor(): float
    {
        return 1;
    }
}
