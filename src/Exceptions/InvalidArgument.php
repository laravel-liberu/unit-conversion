<?php

namespace LaravelEnso\UnitConversion\Exceptions;

use Exception;

class InvalidArgument extends Exception
{
    public static function unsupported(string $from, string $to): self
    {
        return new self(__('Unsupported conversion from :from to :to', [
            'from' => $from,
            'to' => $to,
        ]));
    }
}
