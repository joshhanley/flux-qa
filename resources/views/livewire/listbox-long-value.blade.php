<?php

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div class="max-w-32">
    <flux:select variant="listbox" searchable wire:model="event" placeholder="Please select" label="Event" required>
        <flux:select.option>This is just a test select box input value</flux:select.option>
    </flux:select>

    <flux:select wire:model="event" placeholder="Please select" label="Event" required>
        <flux:select.option>This is just a test select box input value</flux:select.option>
    </flux:select>
</div>
