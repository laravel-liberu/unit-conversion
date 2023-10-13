<?php

use LaravelLiberu\Helpers\Services\Decimals;
use LaravelLiberu\UnitConversion\Exceptions\Expression;
use LaravelLiberu\UnitConversion\Exceptions\Unit;
use LaravelLiberu\UnitConversion\Length\Length;
use LaravelLiberu\UnitConversion\Length\Units\Meter;
use LaravelLiberu\UnitConversion\Length\Units\Millimeter;
use LaravelLiberu\UnitConversion\Mass\Units\Gram;
use Tests\TestCase;

class ServiceTest extends TestCase
{
    /** @test */
    public function can_convert_from_unit()
    {
        $result = Length::from(new Meter(2))->to(Millimeter::class);

        $this->assertTrue(Decimals::eq('2000', $result));
    }

    /** @test */
    public function can_convert_from_expression()
    {
        $result = Length::from('2 m')->to(Millimeter::class);

        $this->assertTrue(Decimals::eq('2000', $result));
    }

    /** @test */
    public function cant_convert_from_invalid_unit()
    {
        $unit = new Gram(2);

        $message = Unit::invalid($unit::class)->getMessage();

        $this->expectException(Unit::class);
        $this->expectExceptionMessage($message);

        Length::from($unit)->to(Meter::class);
    }

    /** @test */
    public function cant_convert_from_invalid_expression()
    {
        $expression = '100 kg 5';
        $message = Expression::invalid($expression)->getMessage();

        $this->expectException(Expression::class);
        $this->expectExceptionMessage($message);

        Length::from($expression)->to(Meter::class);
    }

    /** @test */
    public function cant_convert_from_invalid_symbol()
    {
        $message = Unit::invalid('kx')->getMessage();

        $this->expectException(Unit::class);
        $this->expectExceptionMessage($message);

        Length::from('100 kx')->to(Meter::class);
    }
}
