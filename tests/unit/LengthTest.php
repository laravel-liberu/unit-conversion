<?php

use LaravelEnso\UnitConversion\Enums\Length;
use LaravelEnso\UnitConversion\Exceptions\InvalidArgument;
use Tests\TestCase;

class LengthTest extends TestCase
{
    /** @test */
    public function can_convert_from_m_to_mm()
    {
        $attribute = '15 m';
        $result = Length::convert($attribute, Length::Millimeter);
        $this->assertEquals(15 / 1000, $result);
    }

    /** @test */
    public function can_convert_to_same_unit()
    {
        $attribute = '15 m';
        $result = Length::convert($attribute, Length::Meter);
        $this->assertEquals(15, $result);
    }

    /** @test */
    public function can_convert_from_fake_unit()
    {
        $this->expectException(InvalidArgument::class);

        $attribute = '15 imagine';
        Length::convert($attribute, Length::Millimeter);
    }

    /** @test */
    public function can_convert_to_fake_unit()
    {
        $this->expectException(InvalidArgument::class);

        $attribute = '15 m';
        Length::convert($attribute, 'imagine');
    }
}
