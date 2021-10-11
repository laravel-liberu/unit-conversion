<?php

namespace LaravelEnso\UnitConversion\Enums;

class Mass extends UnitConversion
{
    public const Kilogram = 'kg';
    public const Gram = 'g';

    protected const ConversionTable = [
        self::Kilogram => [
            self::Gram => ['*', 1000],
        ],
        self::Gram => [
            self::Kilogram => ['/', 1000],
        ],
    ];
}
