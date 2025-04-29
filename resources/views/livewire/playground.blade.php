<?php

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public $content = '';
}; ?>

<div class="max-w-32">
    {{-- <p>https://placehold.co/800x400</p>
    <flux:text>Content: {{ var_export($content, true) }}</flux:text>
    <flux:editor wire:model.live="content" toolbar="heading | bold italic strike | bullet ordered blockquote | link | align | image" /> --}}

    {{-- <flux:editor toolbar:prepend="image |" /> --}}

    <flux:select variant="listbox" searchable wire:model="event" placeholder="Please select" label="Event" required>
        <flux:select.option>This is just a test select box input value</flux:select.option>
    </flux:select>

    <flux:select wire:model="event" placeholder="Please select" label="Event" required>
    <flux:select.option>This is just a test select box input value</flux:select.option>
    </flux:select>
</div>
