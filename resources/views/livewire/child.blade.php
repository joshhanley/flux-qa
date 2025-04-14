<?php

use App\Models\User;
use Livewire\Volt\Component;

new class extends Component {
    public $number;
}; ?>

<div>
    Child {{ $number }}
    <button wire:click="$refresh">Refresh</button>
</div>
