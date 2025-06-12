<?php

use Flux\Flux;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;
use Livewire\WithFileUploads;

new class extends Component {
    use WithFileUploads;

    public $file;

    public function store()
    {
        $this->file = $this->file->storeAs(path: 'uploads', name: $this->file->getClientOriginalName());
        $this->file = null;
    }
}; ?>

<div class="p-4">
    @if ($file)
        <img src="{{ $file->temporaryUrl() }}" alt="Uploaded file" class="w-full h-48 object-cover rounded-md">
    @endif
    <flux:input type="file" wire:model.live="file" />
    <flux:button wire:click="store">Store</flux:button>
    <flux:button wire:click="$refresh">Refresh</flux:button>
</div>
