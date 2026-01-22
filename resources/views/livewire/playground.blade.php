
<?php

use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    public $page = 1;

    public function loadMore(): void
    {
        $this->page++;
    }

    #[Computed]
    public function records()
    {
        return collect(range(1,5))->map(fn() => fake()->name);
    }
};
?>

<div class="p-4 flex flex-col bg-white">

    <div class="flex flex-col md:flex-row justify-center gap-3 text-center mb-4">
        <button
            class="bg-gray-600 text-white p-2"
            wire:click="loadMore()" {{-- <- Working --}}
            wire:island.prepend="records_island"
        >
            1. Working
        </button>
        <button
            class="bg-gray-600 text-white p-2"
            wire:click="$wire.loadMore()" {{-- <- Working --}}
            wire:island.prepend="records_island"
        >
            2. Working
        </button>
        <button
            class="bg-red-600 text-white p-2"
            x-on:click="setNextActionOrigin({ el: $el }); $wire.loadMore()"  {{-- <- Not Working --}}
            wire:island.prepend="records_island"
        >
            3. Not working
        </button>
    </div>

    <div class="overflow-y-auto text-center flex-1 space-y-3">
        @island(name: 'records_island')
            @foreach ($this->records as $record)
                <div wire:key="record-{{ $record }}">
                    {{ $record }}
                </div>
            @endforeach
        @endisland
    </div>

</div>
