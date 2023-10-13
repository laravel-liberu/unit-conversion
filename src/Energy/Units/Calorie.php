<?php

namespace LaravelLiberu\UnitConversion\Energy\Units;

use LaravelLiberu\UnitConversion\Services\Unit;

class Calorie extends Unit
{
    public static function label(): string
    {
        return 'calorie';
    }

    public static function symbol(): string
    {
        return 'cal';
    }

    public static function factor(): float
    {
        return 4184E-3;
    }
}
