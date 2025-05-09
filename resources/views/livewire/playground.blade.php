<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new
#[Layout('components.layouts.sidebar')]
class extends Component {
    public $date = '2025-07-19';
}; ?>

<flux:main>
    <flux:date-picker open-to="2026-01-01" wire:model2="date" value="2025-07-19" />
</flux:main>
