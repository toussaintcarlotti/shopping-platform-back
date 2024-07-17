<?php

namespace App\View\Components\Form;

class Radio extends Input
{
    public function __construct(
        ?string $invalid = null,
        string $name = '',
        string $bag = 'default',
        ?string $icon = null,
        ?string $label = null,
    )
    {
        parent::__construct($invalid, $name, $bag, $icon);
    }

    public function render()
    {
        return view('components.form.radio');
    }
}
