<?php

namespace LaravelEnso\UnitConversion\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use LaravelEnso\UnitConversion\Contracts\Unit;
use LaravelEnso\UnitConversion\Exceptions\Unit as Exception;
use ReflectionClass;

abstract class Converter
{
    private Unit $from;
    private Collection $units;

    public function __construct(Unit | string $from)
    {
        $this->init($from);
    }

    public static function from(Unit | string $from): static
    {
        return new static($from);
    }

    public function to(string $class): string
    {
        $to = $this->match($class);

        return Conversion::handle($this->from, $to);
    }

    private function init(Unit | string $from): void
    {
        if ($from instanceof Unit) {
            $this->match($from::class);
            $this->from = $from;
        } else {
            Expression::validate($from);
            [$value, $symbol] = explode(' ', $from);
            $from = $this->match($symbol, true);
            $this->from = new $from($value);
        }
    }

    private function match(string $argument, bool $symbol = false): string
    {
        $match = fn ($unit) => $symbol
            ? $unit::symbol() === $argument
            : $unit === $argument;

        $unit = $this->units()->first($match);

        if ($unit === null) {
            throw Exception::invalid($argument);
        }

        return $unit;
    }

    private function units(): Collection
    {
        $namespace = (new ReflectionClass(static::class))->getNamespaceName();

        $service = Str::of($namespace)->explode('\\')->last();

        return $this->units ??= Collection::wrap(File::files(__DIR__."/../{$service}/Units"))
            ->map(fn ($file) => File::name($file))
            ->map(fn ($unit) => "{$namespace}\\Units\\{$unit}");
    }
}
