<?php

namespace App\View\Components\Form;

use function view;

class Select extends Input
{
    public function __construct(
        ?string $invalid = null,
        string $name = '',
        string $bag = 'default',
        ?string $icon = null,
        public ?string $placeholder = null,
        public bool $select2 = false,
    )
    {
        parent::__construct($invalid, $name, $bag, $icon);
    }

    public function render()
    {
        return view('components.form.select');
    }
}
