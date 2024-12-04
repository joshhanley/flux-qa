<?php

use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new class extends Component {
    public $featured1 = true;
    public bool $featured2 = true;
};

?>

<flux:main>
    <flux:switch wire:model.live="featured1" label="Featured1" />
    Featured 1: {{ $featured1 ? 'Featured' : 'Not featured' }}

    <flux:switch wire:model.live="featured2" label="Featured2" />
    Featured 2: {{ $featured2 ? 'Featured' : 'Not featured' }}
</flux:main>
