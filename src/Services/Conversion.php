<?php

namespace LaravelLiberu\UnitConversion\Services;

use LaravelLiberu\Helpers\Services\Decimals;
use LaravelLiberu\UnitConversion\Contracts\Unit;

class Conversion
{
    public static function handle(Unit $from, string $to): string
    {
        $baseValue = Decimals::mul($from->value(), $from::factor(), 20);

        return Decimals::div($baseValue, $to::factor(), 2);
    }
}
