<?php

use Livewire\Attributes\Modelable;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new class extends Component {
    #[Modelable, Validate('min:3')]
    public $model = '';

    public function updated()
    {
        $this->validate();
    }
}; ?>

<div>   
    <flux:input wire:model.live="model" />
    Child: {{ $model }}
    <flux:error name="model" />
    <flux:error name="test" />
</div>
