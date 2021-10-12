<?php

namespace LaravelEnso\UnitConversion\Contracts;

interface Unit
{
    public static function label(): string;

    public static function symbol(): string;

    public static function factor(): float;

    public function value(): string; //TODO string

    public static function from(self $unit): string; //TODO string
}
