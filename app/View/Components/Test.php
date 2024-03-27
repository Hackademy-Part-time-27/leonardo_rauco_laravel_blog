<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Test extends Component
{
    public $nav;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->nav=[

            'about-me'=>'Chi sono',
            'contacts'=>'Contatti',
            'articles'=>'Articoli',
            'welcome'=>'Home',
            
            

        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.test');
    }
}
