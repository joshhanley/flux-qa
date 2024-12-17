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
            <flux:option value="empty">Add new: '{{ $search }}'</flux:option>
        @endif --}}
        <flux:option value="photography">Photography</flux:option>
        <flux:option value="design-services">Design services</flux:option>
        <flux:option value="web-development">Web development</flux:option>
        <flux:option value="accounting">Accounting</flux:option>
        <flux:option value="legal-services">Legal services</flux:option>
        <flux:option value="consulting">Consulting</flux:option>
        <flux:option value="other">Other</flux:option>
    </flux:select>
</flux:main>
