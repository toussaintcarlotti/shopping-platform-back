<?php

namespace App\View\Components\Layouts;

use Illuminate\View\Component;

class App extends Component
{
    public function __construct(
        public ?string $title = null,
        public ?string $subtitle = null,
        public bool $noMetatitle = false,
        public ?string $appTitle = null,
    ) {}

    public function render()
    {
        if (!$this->title) {
            $this->noMetatitle = true;
        }

        if ($this->noMetatitle === true){
            $this->appTitle = config('app.name');
        } else {
            $this->appTitle = $this->title . ' | ' . config('app.name');
        }

        return view('components.layouts.app');
    }
}
