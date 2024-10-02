<?php

use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public $state;
};
?>

<flux:main class="space-y-4">
    <p>State: {{ $state }}</p>
    <flux:autocomplete wire:model.live="state" label="State of residence">
        <flux:autocomplete.item>Alabama</flux:autocomplete.item>
        <flux:autocomplete.item>Arkansas</flux:autocomplete.item>
        <flux:autocomplete.item>California</flux:autocomplete.item>
    </flux:autocomplete>
</flux:main>
