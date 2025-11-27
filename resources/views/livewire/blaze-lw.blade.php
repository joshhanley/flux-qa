<?php

use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Component;

new class extends Component {
    #[Validate('required')]
    public $search = '';

    public function submit()
    {
        $this->validate();
    }
};

?>

<div class="space-y-4">
    <x-blaze.field wire:model="search">
        <label class="block">Search</label>
        <input wire:model="search" class="border rounded-lg px-3 py-2" />
    </x-blaze.field>

    <button type="button" wire:click="submit" class="border rounded-lg px-3 py-2">Submit</button>
</div>