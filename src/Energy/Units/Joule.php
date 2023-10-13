<?php

namespace LaravelLiberu\UnitConversion\Energy\Units;

use LaravelLiberu\UnitConversion\Services\Unit;

class Joule extends Unit
{
    public static function label(): string
    {
        return 'joule';
    }

    public static function symbol(): string
    {
        return 'j';
    }

    public static function factor(): float
    {
        return 1;
    }
}
