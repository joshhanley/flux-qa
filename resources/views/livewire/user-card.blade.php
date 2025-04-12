<?php

use App\Models\User;
use Flux\Flux;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new
#[On('user-deleted')]
class extends Component
{
    public User $user;
};
?>

<div>
    User card: {{ $user->id }} - {{ $user->name }}

    <flux:button wire:click="$dispatch('delete-user-confirmation', { id: {{ $user->id }} })">
        Delete
    </flux:button>
</div>
