<?php

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public $content = '';
}; ?>

<div>
    <p>https://placehold.co/800x400</p>
    <flux:text>Content: {{ var_export($content, true) }}</flux:text>
    <flux:editor wire:model.live="content" toolbar="heading | bold italic strike | bullet ordered blockquote | link | align | image" />

    <flux:editor toolbar:prepend="image |" />
</div>
