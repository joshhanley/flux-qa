<?php

use Livewire\Attributes\Reactive;
use Livewire\Component;

new class extends Component {
    #[Reactive]
    public $count = 0;

    public function updated()
    {
        ray('updated', $this->count);
    }

    public function increment()
    {
        $this->count++;
    }
}; ?>

<div>
    Child count: {{ $count }}
    <flux:button wire:click="increment">Increment</flux:button>
</div>