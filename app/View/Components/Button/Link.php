<?php

namespace App\View\Components\Button;

use function view;

class Link extends Classic
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color = 'primary', $light = false, $btnIcon = false, $icon = '', $size = 'md')
    {
        parent::__construct($color, $light, $btnIcon, $icon, $size);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        return view('components.button.link');

    }
}

