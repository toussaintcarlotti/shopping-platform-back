<?php

namespace App\View\Components;

use Illuminate\View\Component;
use function view;

class Form extends Component
{
    public $method;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($method = "GET")
    {
        $this->method = $method;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form');
    }
}
