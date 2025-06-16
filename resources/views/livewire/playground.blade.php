<?php

use Livewire\Volt\Component;

new class extends Component {
    public $start = 3;

    public function begin()
    {
        while ($this->start >= 0) {
            ray('start', $this->start);
            // Stream the current count to the browser...
            $this->stream(
                to: 'count',
                content: $this->start,
                replace: true,
            );

            ray('not aborted', $this->start);

            // Pause for 1 second between numbers...
            sleep(1);

            // Decrement the counter...
            $this->start = $this->start - 1;
        };
    }
    // public $testing;
    // public function doSomething()
    // {
    //     ray('doSomething');
    //     sleep(5);
    //     ray('finishedDoSomething');
    // }

    // public function doSomethingElse()
    // {
    //     ray('doSomethingElse');
    // }
}; ?>

<div class="flex flex-col items-start">
    <button wire:click="begin">Start count-down</button>

    <h1>Count: <span wire:stream="count">{{ $start }}</span></h1>
    {{-- <flux:button wire:click="doSomething">Do Something</flux:button>
    <flux:button wire:click="doSomethingElse">Do Something Else</flux:button>

    <flux:input wire:model.live="testing" />

    <livewire:child lazy isolated />
    <livewire:child2 lazy isolated /> --}}

    {{-- <a href="/playground" class="underline" wire:current="font-bold">Playground</a>
    <a href="/playground2" class="underline" wire:current="font-bold">Playground 2</a>
    <a href="/playground3" class="underline" wire:current="font-bold">Playground 3</a>

    <button type="button" wire:click="$refresh" class="rounded px-3 py-2 hover:bg-gray-200">Refresh</button> --}}
</div>
