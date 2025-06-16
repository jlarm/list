<?php

declare(strict_types=1);

namespace App\Enums;

enum Role: string
{
    case PARENT = 'parent';
    case RELATIVE = 'RELATIVE';

    public function label(): string
    {
        return match ($this) {
            self::PARENT => __('Parent'),
            self::RELATIVE => __('Relative'),
        };
    }
}
