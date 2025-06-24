<?php

use App\Models\User;
use Livewire\Attributes\Modelable;
use Livewire\Component;

new class extends Component {
    public function doSomething() {
        sleep(5);
    }
}; ?>

<div wire2:poll.5s>
    <div wire:loading wire:target="$parent.test">Child is loading...</div>
    Child
    <flux:button wire:click="doSomething">Child Do Something</flux:button>
</div>