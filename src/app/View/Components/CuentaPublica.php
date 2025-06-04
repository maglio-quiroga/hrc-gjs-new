<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CuentaPublica extends Component
{
    public $cuenta_publica;
    
    /**
     * Create a new component instance.
     * 
     * @param array $cuenta_publica
     */
    public function __construct($cuentaPublica)
    {
        $this->cuenta_publica = $cuentaPublica;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cuenta-publica');
    }
}
