<?php

use Livewire\Volt\Component;

new class extends Component {
    public $state;
};

?>

<div>
    {{ var_export($state) }}
    <flux:checkbox wire:model="state" label="My Checkbox" :checked="old('mycheckbox', request()->input('mycheckbox'))"></flux:checkbox>
        <button type="button" wire:click="$refresh">Refresh</button>
</div>