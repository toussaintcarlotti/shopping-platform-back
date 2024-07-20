<?php

namespace App\View\Components\Card;

use Illuminate\View\Component;

class Header extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $title = '', public bool $titleBold = false)
    {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card.header');
    }
}
