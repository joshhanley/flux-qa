<?php

use Livewire\Volt\Component;

new class extends Component {
    //
};
?>

<div class="mt-12 space-y-8">
    <flux:input placeholder="Input" />
    <flux:command>
        <flux:command.input placeholder="Search..." />

        <flux:command.items>
            <flux:command.item wire:click="..." icon="user-plus" kbd="⌘A">Assign to…</flux:command.item>
            <flux:command.item wire:click="..." icon="document-plus">Create new file</flux:command.item>
            <flux:command.item wire:click="..." icon="folder-plus" kbd="⌘⇧N">Create new project</flux:command.item>
            <flux:command.item wire:click="..." icon="book-open">Documentation</flux:command.item>
            <flux:command.item wire:click="..." icon="newspaper">Changelog</flux:command.item>
            <flux:command.item wire:click="..." icon="cog-6-tooth" kbd="⌘,">Settings</flux:command.item>
        </flux:command.items>
    </flux:command>

    <flux:modal.trigger name="search" shortcut="cmd.k">
        <flux:input as="button" placeholder="Search..." icon="magnifying-glass" kbd="⌘K" />
    </flux:modal.trigger>

    <flux:modal name="search" variant="bare" class="min-h-[30rem] w-full max-w-[30rem] px-6" x-on:keydown.cmd.k.document="$el.showModal()">
        <flux:command class="border-none shadow-lg">
            <flux:command.input placeholder="Search..." closable />

            <flux:command.items>
                <flux:command.item icon="user-plus" kbd="⌘A">Assign to…</flux:command.item>
                <flux:command.item icon="document-plus">Create new file</flux:command.item>
                <flux:command.item icon="folder-plus" kbd="⌘⇧N">Create new project</flux:command.item>
                <flux:command.item icon="book-open">Documentation</flux:command.item>
                <flux:command.item icon="newspaper">Changelog</flux:command.item>
                <flux:command.item icon="cog-6-tooth" kbd="⌘,">Settings</flux:command.item>
            </flux:command.items>
        </flux:command>
    </flux:modal>

    <flux:select variant="listbox" searchable placeholder="Searchable">
        <flux:option>Photography</flux:option>
        <flux:option>Design services</flux:option>
        <flux:option>Web development</flux:option>
        <flux:option>Accounting</flux:option>
        <flux:option>Legal services</flux:option>
        <flux:option>Consulting</flux:option>
        <flux:option>Other</flux:option>
    </flux:select>

    <flux:select variant="listbox" multiple placeholder="Multiple">
        <flux:option>Photography</flux:option>
        <flux:option>Design services</flux:option>
        <flux:option>Web development</flux:option>
        <flux:option>Accounting</flux:option>
        <flux:option>Legal services</flux:option>
        <flux:option>Consulting</flux:option>
        <flux:option>Other</flux:option>
    </flux:select>

    <flux:select variant="combobox" placeholder="Combo">
        <flux:option>Photography</flux:option>
        <flux:option>Design services</flux:option>
        <flux:option>Web development</flux:option>
        <flux:option>Accounting</flux:option>
        <flux:option>Legal services</flux:option>
        <flux:option>Consulting</flux:option>
        <flux:option>Other</flux:option>
    </flux:select>
</div>