<?php

use Livewire\Attributes\Url;
use Livewire\Volt\Component;

new class extends Component {
    #[Url(history: true)]
    public $search;
}; ?>

<div>
    <input wire:model.live.debounce.700ms="search" placeholder="Search" />
</div>