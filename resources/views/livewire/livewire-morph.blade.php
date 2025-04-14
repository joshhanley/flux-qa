<?php

use Livewire\Volt\Component;

new class extends Component {
    public $prepend = false;

    #[\Livewire\Attributes\Computed]
    public function numbers()
    {
        if ($this->prepend) {
            return range(0, 2);
        }

        return range(1, 2);
    }
};
?>

<div>
    <a href="/playground" wire:navigate>Playground</a>
    <button wire:click="$toggle('prepend')" dusk="prepend">Prepend</button>
    <div>
        @foreach ($this->numbers as $index => $number)
            <div wire:key="{{ $number }}">
                <livewire:child :$number :key="$number" />
            </div>
        @endforeach
    </div>
	{{-- <button wire:click="$refresh">Refresh</button>
    <h1>Section 1</h1>
    <div>
        @foreach (range(1, 2) as $number)
            <livewire:child section="1" :$number :key="$number" />
        @endforeach
    </div>

    <h1>Section 2</h1>
    <div>
        @foreach (range(1, 2) as $number)
            <livewire:child section="2" :$number :key="$number" />
        @endforeach
    </div> --}}
</div>