<?php

namespace App\View\Components\Alert;

use Illuminate\View\Component;
use function view;

class Classic extends Component
{
    public mixed $type;
    public string $class;
    public string $iconClass;
    public string $textClass;
    public mixed $title;
    public mixed $dismissible;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type ='primary', $background = false, $border = false, $title = '', $dismissible = false)
    {
        $textClass = 'text-'.$type;
        $class = 'alert-'.$type.' ';
        $iconClass = 'svg-icon-'.$type;

        if ($border === 'solid'){
            $border = 'border border-'.$type;
        }
        else if ($border){
            $border = 'border border-'.$type.' border-'.$border;
        }

        if ($background === 'solid'){
            $background = 'text-white bg-'.$type;
            $class = '';
            $iconClass = 'svg-icon-light';
            $textClass = 'text-white';
        }
        else if ($background){
            $background = 'bg-'.$background.'-'.$type;
        }

        $this->type = $type;
        $this->class = $background.' '.$border.' '.$class;
        $this->iconClass = $iconClass;
        $this->textClass = $textClass;
        $this->title = $title;
        $this->dismissible = $dismissible;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert.classic');
    }
}
