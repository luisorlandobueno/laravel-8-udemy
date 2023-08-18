<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alerta extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $type;
    public $mensaje;
    public function __construct($type , $mensaje)
    {
    
    $this->type=$type;
    $this->mensaje=$mensaje;


    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alerta');
    }

     public function lenguajes($lengua)
    {
        return [

            'c++',
            'php',
            'python',
            $lengua
        ];
    }
}
