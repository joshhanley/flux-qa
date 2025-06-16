<?php

use App\Models\User;
use Livewire\Attributes\Modelable;
use Livewire\Volt\Component;

new class extends Component {
    public $test;

    public function mount()
    {
        sleep(5);
        $this->test = '2';
    }
}; ?>

<div>
    Child: {{ $test }}
</div>