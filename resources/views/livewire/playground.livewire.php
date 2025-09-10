<?php

use Flux\DateRange;
use Livewire\Volt\Component;

new class extends Component {
    public $min;
    public $max;

    public function mount()
    {
        $this->min = now()->subDays(1)->toDateString();
        $this->max = now()->addDays(1)->toDateString();
    }

    public function changeDates()
    {
        $this->min = now()->subDays(5)->toDateString();
        $this->max = now()->addDays(5)->toDateString();
    }
}; ?>

<div>
    <flux:button wire:click="changeDates">Change Dates</flux:button>
    <flux:date-picker multiple />
</div>
