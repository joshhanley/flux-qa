<?php

use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new class extends Component {
    #[Validate('required')]
    public $test = '';

    public function save()
    {
        $this->validate();
    }
}; ?>

<div>
    Parent: {{ $test }}
    <flux:input label="Test" wire:model.live="test" />
    <livewire:modelable wire:model="test" />
    <flux:button wire:click="save">Save</flux:button>
</div>
