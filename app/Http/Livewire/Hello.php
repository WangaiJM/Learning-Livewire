<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Hello extends Component
{
    public $name = 'Jack';
    
    public function render()
    {
        return view('livewire.hello');
    }
}
