<?php

namespace LaravelLiberu\UnitConversion\Length\Units;

use LaravelLiberu\UnitConversion\Services\Unit;

class Centimeter extends Unit
{
    public static function label(): string
    {
        return 'centimeter';
    }

    public static function symbol(): string
    {
        return 'cm';
    }

    public static function factor(): float
    {
        return 1E-2;
    }
}
