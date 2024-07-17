<?php

namespace App\Traits;

trait EnumTrait
{
    public static function getValues(): array
    {
        return array_map(fn ($case) => $case->value, self::cases());
    }

    public static function validationFormat(): string
    {
        return implode(',', self::getValues());
    }
}
