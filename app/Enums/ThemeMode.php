<?php

namespace App\Enums;

use App\Traits\EnumTrait;

enum ThemeMode: string
{
    use EnumTrait;

    case LIGHT = 'light';
    case DARK = 'dark';
    case SYSTEM = 'system';
}
