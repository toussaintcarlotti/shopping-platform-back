<?php

namespace App\View\Components\Navbar;

use Illuminate\View\Component;

class Item extends Component
{
    public $active;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($active = null)
    {
        if ($active){
            $active = 'active';
        }
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navbar.item');
    }
}
