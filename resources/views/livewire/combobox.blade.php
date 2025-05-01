<?php

use Livewire\Volt\Component;

new class extends Component {
    public $search = '';
    public $selected = '';
};
?>

<flux:main container class="max-w-96">
    <flux:text>Search: {{ $search }}</flux:text>
    <flux:text>Selected: {{ $selected }}</flux:text>

    <flux:select wire:model.live="selected" variant="listbox" searchable :filter="false" placeholder="Choose industry...">
        <x-slot name="search">
            <flux:select.search class="px-4" wire:model.live="search" placeholder="Search industries2..." />
        </x-slot>
        {{-- <x-slot name="input">
            <flux:select.input wire:model.live="search" :invalid="$errors->has('search')" />
        </x-slot>

        @if ($search !== '')
            <flux:select.option value="empty">Add new: '{{ $search }}'</flux:select.option>
        @endif --}}
        <flux:select.option value="photography">Photography</flux:select.option>
        <flux:select.option value="design-services">Design services</flux:select.option>
        <flux:select.option value="web-development">Web development</flux:select.option>
        <flux:select.option value="accounting">Accounting</flux:select.option>
        <flux:select.option value="legal-services">Legal services</flux:select.option>
        <flux:select.option value="consulting">Consulting</flux:select.option>
        <flux:select.option value="other">Other</flux:select.option>
    </flux:select>
</flux:main>
