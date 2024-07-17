<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class ChangeThemeMode extends Component
{
    public $themeMode;

    public function changeThemeMode(string $mode): void
    {
        $this->themeMode = $mode;
    }

    public function render(): View
    {
        return view('livewire.change-theme-mode');
    }
}
