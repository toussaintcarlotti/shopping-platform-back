<?php

namespace App\View\Components\Navbar;

use Illuminate\View\Component;

class SubDropdown extends Component
{
    public $name;
    public $active;
    public $icon;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $active = false, $icon = null)
    {
        $this->name = $name;
        $this->active = $active;
        $this->icon = $icon;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navbar.sub-dropdown');
    }
}
