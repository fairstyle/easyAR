<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Paginaerror extends Component
{

    public $codigo, $titulo, $desc;

    public function render()
    {
        return view('livewire.paginaerror');
    }
}
