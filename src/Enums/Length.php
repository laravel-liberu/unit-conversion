<?php

namespace LaravelEnso\UnitConversion\Enums;

class Length extends UnitConversion
{
    public const Meter = 'm';
    public const Centimeter = 'cm';
    public const Millimeter = 'mm';

    protected const ConversionTable = [
        self::Meter => [
            self::Centimeter => ['*', 100],
            self::Millimeter => ['*', 1000],
        ],
        self::Centimeter => [
            self::Meter => ['/', 100],
            self::Millimeter => ['*', 10],
        ],
        self::Millimeter => [
            self::Meter => ['/', 1000],
            self::Centimeter => ['/', 10],
        ],
    ];
}
