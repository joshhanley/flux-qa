<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <flux:date-picker>
        <x-slot name="trigger">
            <flux:date-picker.input clearable />
        </x-slot>
    </flux:date-picker>
    <flux:select variant="listbox" clearable>
        <flux:select.option>Test</flux:select.option>
    </flux:select>
</div>