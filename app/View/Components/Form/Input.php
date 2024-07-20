<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;
use function session;
use function view;

class Input extends Component
{
    public string $nameError;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public ?string $invalid = null,
        public string $name = '',
        public string $bag = 'default',
        public string|null $icon = null,
        public string|null $value = null,
    ){
        $this->nameError = $name;
        if (str_contains($name, '[')){
            $this->nameError = str_replace(array('[', '[]', ']'), array('.', '.', ''), $name);
        }
        if (session()->get('errors')?->getBag($bag)->has($this->nameError)){
            $this->invalid = ' is-invalid';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input');
    }
}
