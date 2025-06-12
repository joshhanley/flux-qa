<?php

use App\Models\User;
use Livewire\Attributes\Modelable;
use Livewire\Volt\Component;

new class extends Component {
    #[Modelable]
    public string $value;
}; ?>

<div>
    <a href="/playground2?foo=bar&baz=qux" wire:navigate.hover class="underline">Playground 2</a>
    <input type="text" wire:model="value">
</div>