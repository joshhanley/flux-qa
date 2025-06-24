<?php

use Livewire\Volt\Component;

new class extends Component {
    public $other = '';
    public $search = '';

    public function updated() {
        sleep(5);
    }

    public function test() {
        sleep(3);
    }

    public function doSomething() {
        ray('doSomething');
    }
}; ?>

<div class="max-w-md flex flex-col gap-4" wire2:poll.5s="test">
    <div wire:loading wire:target="$refresh">Loading...</div>
    <flux:link href="/playground" wire:navigate>Playground</flux:link>
    <flux:button wire:click="test">Test</flux:button>
    <flux:button wire:click="doSomething">Do Something</flux:button>
    <flux:button wire:click="$refresh">Refresh</flux:button>
    <flux:input wire:model="other" />
    <flux:input wire:model.live="search" />
    <flux:text>Other: {{ $other }}</flux:text>
    <flux:text>Search: {{ $search }}</flux:text>
    <flux:text>Time: {{ now()->format('H:i:s') }}</flux:text>
    <livewire:child />
</div>
