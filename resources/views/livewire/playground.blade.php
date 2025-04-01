<?php

use Livewire\Volt\Component;

new class extends Component {
    public $content;
}; ?>

<div>
    <flux:text>Content: {{ var_export($content, true) }}</flux:text>
    <flux:editor wire:model.live="content" />
</div>
