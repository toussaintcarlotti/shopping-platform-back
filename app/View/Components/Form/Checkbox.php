<?php

namespace App\View\Components\Form;

class Checkbox extends Input
{
    public function __construct(
        ?string $invalid = null,
        string  $name = '',
        string  $bag = 'default',
        ?string $icon = null,
        ?string $value = null,
        public ?string $label = null,
    )
    {
        parent::__construct($invalid, $name, $bag, $icon, $value);
    }

    public function render()
    {
        return view('components.form.checkbox');
    }
}
