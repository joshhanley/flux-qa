<?php

use Flux\Flux;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public $name = 'test';
}; ?>

<div class="max-w-96">
    <flux:text>Name: {{ $name }}</flux:text>
    <flux:input wire:model.live="name" />
</div>
