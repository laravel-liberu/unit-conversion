<?php

namespace LaravelEnso\UnitConversion\Enums;

use Illuminate\Support\Str;
use LaravelEnso\Enums\Services\Enum;
use LaravelEnso\UnitConversion\Exceptions\InvalidArgument;

abstract class UnitConversion extends Enum
{
    protected const ConversionTable = [];

    public static function convert(string $attribute, string $to): float|int
    {
        [$value, $from] = Str::of($attribute)->lower()->explode(' ');

        if ($from === $to) {
            return 1 * $value;
        }

        self::validate($from, $to);

        return self::compute($value, $from, $to);
    }

    private static function compute($value, $from, $to): float|int
    {
        [$operation, $factor] = static::ConversionTable[$to][$from];

        return match ($operation) {
            '*' => $value * $factor,
            '/' => $value / $factor,
        };
    }

    private static function validate($from, $to): void
    {
        $invalid = self::keys()->intersect([$from, $to])->count() !== 2;

        if ($invalid) {
            throw InvalidArgument::unsupported($from, $to);
        }
    }
}
