<?php

use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public $column;

    public function sort($itemId, $position)
    {
        $items = array_values(array_filter($this->column->items, fn($item) => $item->id !== $itemId));

        array_splice($items, min($position, count($items)), 0, [(object)['id' => $itemId]]);

        $this->column->items = $items;
    }
}; ?>

<div
	x-sort="$wire.sort($item, $position)"
	x-sort:group="column"
	class="h-full border border-gray-300">
    <button type="button" wire:click="$refresh">Refresh</button>
	@foreach($column->items as $item)
		<livewire:item :key="$item->id" :item="$item" />
	@endforeach
</div>
