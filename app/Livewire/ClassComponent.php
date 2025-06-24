<?php

namespace App\Livewire;

use Livewire\Component;

class ClassComponent extends Component
{
    public $component = 'component!';
    public function render()
    {
        return view('livewire.class-component');
    }
}
