<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Badge extends Component
{
    public string $classes;

    public function __construct(string $color = 'light', string $size = 'md', string $shape = 'default', bool $light = false)
    {
        $classes = ['badge'];
        $classes[] = "badge".($light ? '-light' : '')."-{$color}";
        $classes[] = "badge-{$shape}";
        $classes[] = "badge-{$size}";
        $this->classes = implode(' ', $classes);
    }

    public function render(): View
    {
        return view('components.badge');
    }
}

