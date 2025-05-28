<?php

use Livewire\Volt\Component;

new class extends Component {
    public int $selectedId = 0;

    public function select(int $id): void
    {
        $this->selectedId = $id;

        sleep(1);
    }
}; ?>

<div>
    <button wire:click="select(1)" class="size-10 border rounded">1</button>

    <div>
        @if ($this->selectedId !== 0)
            <livewire:child :key="'key'.$this->selectedId" :item="$this->selectedId" />
        @endif
    </div>

    <div x-data="{ show: false }" x-cloak>
        <div x-show="show"></div>
    </div>
</div>
