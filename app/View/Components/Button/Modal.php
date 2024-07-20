<?php

namespace App\View\Components\Button;

class Modal extends Classic
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $modal, $color = 'primary', $light = false, $btnIcon = false, $icon = '', $size = 'md')
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
        return view('components.button.modal');
    }
}
