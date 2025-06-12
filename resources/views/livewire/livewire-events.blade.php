<?php

use Livewire\Attributes\On;
use Livewire\Volt\Component;

new class extends Component {
    public function doSomething()
    {
        $this->dispatch('test', 'new');
    }

    #[On('test')]
    public function random(...$details)
    {
        ray('method listener', $details);
    }
}; ?>

<div>
    <flux:button wire:click="doSomething">Fire from Livewire method</flux:button>
    <flux:button wire:click="$dispatch('test', 'other')">Fire from $dispatch</flux:button>
    <div x-on:test.window="console.log('x-on: listener', $event.detail)"></div>
</div>

@script
    <script>
        $wire.on('test', (detail) => {
            console.log('script listener', detail);
        });
    </script>
@endscript