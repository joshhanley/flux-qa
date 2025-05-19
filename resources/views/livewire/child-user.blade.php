<?php

use App\Models\User;
use Livewire\Volt\Component;

new class extends Component {
    public $user;
    public $other;
}; ?>

<div>
    Child: {{ $user->name }}
    <input wire:model="other" />
</div>
