<?php

use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public $item;
}; ?>

<div
	x-sort:item="{{ $item->id }}"
	class="group flex items-center space-x-2 py-2 px-2 hover:bg-gray-100 select-none"
>
	<svg class="cursor-move size-5" aria-hidden="true" viewBox="0 0 16 16"><path d="M10 13a1 1 0 100-2 1 1 0 000 2zm-4 0a1 1 0 100-2 1 1 0 000 2zm1-5a1 1 0 11-2 0 1 1 0 012 0zm3 1a1 1 0 100-2 1 1 0 000 2zm1-5a1 1 0 11-2 0 1 1 0 012 0zM6 5a1 1 0 100-2 1 1 0 000 2z"></path></svg>
	<span class="block">#{{ $item->id }} Item</span>
</div>

