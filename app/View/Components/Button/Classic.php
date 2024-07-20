<?php

namespace App\View\Components\Button;

use Illuminate\View\Component;
use function view;

class Classic extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $color = 'primary',
        public bool $light = false,
        public bool $btnIcon = false,
        public ?string $icon = null,
        public string $size = 'md',
        public string $myClass = '',
        public string $type = 'button',
        public $loader = true,
    ) {
        if ($light) {
            $myClass = ' btn-light-'.$color;
        } else {
            $myClass = ' btn-'.$color;
        }

        if ($btnIcon) {
            $myClass .= ' btn-icon';
        }

        $this->myClass = $myClass.' btn-'.$size;
    }

    public function render()
    {
        return view('components.button.classic');
    }
}
