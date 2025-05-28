<?php

use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    #[Computed]
    public function columns()
    {
        return [
            (object)[
                'id' => 1,
                'name' => 'A',
                'items' => [
                    (object)['id' => 1],
                    (object)['id' => 2],
                    (object)['id' => 3],
                ]
            ],
            (object)[
                'id' => 2,
                'name' => 'B',
                'items' => [
                    (object)['id' => 4],
                    (object)['id' => 5],
                    (object)['id' => 6],
                ]
            ],
            (object)[
                'id' => 3,
                'name' => 'C',
                'items' => [
                    (object)['id' => 7],
                    (object)['id' => 8],
                    (object)['id' => 9],
                ]
            ],
        ];
    }
}; ?>

<div class="flex grow-0 space-x-4">
	@foreach($this->columns as $column)
		<div wire:key="column-{{ $column->id }}" class="flex flex-col border border-gray-300 w-1/3 p-2 space-y-0 rounded-2xl">
			<div class="p-2 font-bold bg-gray-100 rounded-t-2xl">{{ $column->name }}</div>
			<livewire:column :key="$column->id" :column="$column" />
		</div>
	@endforeach
</div>

