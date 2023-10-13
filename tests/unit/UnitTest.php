<?php

use LaravelLiberu\Helpers\Services\Decimals;
use LaravelLiberu\UnitConversion\Exceptions\Conversion;
use LaravelLiberu\UnitConversion\Exceptions\Expression;
use LaravelLiberu\UnitConversion\Exceptions\Unit;
use LaravelLiberu\UnitConversion\Length\Units\Meter;
use LaravelLiberu\UnitConversion\Length\Units\Millimeter;
use LaravelLiberu\UnitConversion\Mass\Units\Gram;
use Tests\TestCase;

class UnitTest extends TestCase
{
    /** @test */
    public function can_convert_from_unit()
    {
        $result = Millimeter::from(new Meter(2));

        $this->assertTrue(Decimals::eq('2000', $result));
    }

    /** @test */
    public function can_convert_from_expression()
    {
        $result = Millimeter::from('2 m');

        $this->assertTrue(Decimals::eq('2000', $result));
    }

    /** @test */
    public function cant_convert_from_incompatible_unit()
    {
        $unit = new Meter(2);

        $message = Conversion::incompatible($unit::symbol())->getMessage();

        $this->expectException(Conversion::class);
        $this->expectExceptionMessage($message);

        Gram::from($unit);
    }

    /** @test */
    public function cant_convert_from_invalid_expression()
    {
        $expression = '100 kg 5';
        $message = Expression::invalid($expression)->getMessage();

        $this->expectException(Expression::class);
        $this->expectExceptionMessage($message);

        Gram::from($expression);
    }

    /** @test */
    public function cant_convert_from_invalid_symbol()
    {
        $message = Unit::invalid('kx')->getMessage();

        $this->expectException(Unit::class);
        $this->expectExceptionMessage($message);

        Gram::from('100 kx');
    }
}
