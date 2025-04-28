<?php

use App\Models\User;
use Livewire\Volt\Component;

new class extends Component {
    public $number;
    public $other;
}; ?>

<div>
    Child {{ $number }}
    <button wire:click="$refresh">Refresh</button>
    <input wire:model.live="other" />
</div>
