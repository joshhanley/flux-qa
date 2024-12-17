<?php

use Livewire\Volt\Component;

new class extends Component
{
    public $show = true;
    public $show2 = false;
};
?>

<div>
    {{-- <div class="fixed h-full w-full p-[12vh] bg-zinc-200 overflow-hidden">
        <div class="bg-white rounded p-4 inline-flex flex-col max-h-[76vh]">
            Some content

            <div class="overflow-y-auto">
                <p>Content</p>
                <p>Content</p>
                <p>Content</p>
                <p>Content</p>
                <p>Content</p>
                <p>Content</p>
                <p>Content</p>
                <p>Content</p>
                <p>Content</p>
                <p>Content</p>
                <p>Content</p>
                <p>Content</p>
                <p>Content</p>
            </div>
        </div>
    </div> --}}

    <flux:modal.trigger name="search" shortcut="cmd.k">
        <flux:input as="button" placeholder="Search..." icon="magnifying-glass" kbd="⌘K" />
    </flux:modal.trigger>

    {{-- <flux:modal 
        wire:model="show" 
        name="search"
        variant="bare"
        class="w-full max-w-[30rem] py-[12vh] max-h-screen h-screen overflow-y-hidden"
        x-on:click.self="$el.closeModal()"
        x-on:keydown.cmd.k.document="$el.showModal()"
    >
            <flux:command class="border-none shadow-lg inline-flex flex-col max-h-[76vh]">
                <flux:command.input placeholder="Search..." closable />
                <flux:command.items class="">
                    <flux:command.item icon="user-plus" kbd="⌘A">Assign to…</flux:command.item>
                    <flux:command.item icon="document-plus">Create new file</flux:command.item>
                    <flux:command.item icon="folder-plus" kbd="⌘⇧N">Create new project</flux:command.item>
                    <flux:command.item icon="book-open">Documentation</flux:command.item>
                    <flux:command.item icon="newspaper">Changelog</flux:command.item>
                    <flux:command.item icon="cog-6-tooth" kbd="⌘,">Settings</flux:command.item>
                </flux:command.items>
            </flux:command>
    </flux:modal> --}}

{{-- <flux:modal 
    wire:model="show" 
    name="search"
    variant="pinned"
    class="w-full max-w-[30rem]"
    x-on:keydown.cmd.k.document="$el.showModal()"
>
        <flux:command class="border-none shadow-lg inline-flex flex-col max-h-[76vh]">
            <flux:command.input placeholder="Search..." closable />
            <flux:command.items class="">
                <flux:command.item icon="user-plus" kbd="⌘A">Assign to…</flux:command.item>
                <flux:command.item icon="document-plus">Create new file</flux:command.item>
                <flux:command.item icon="folder-plus" kbd="⌘⇧N">Create new project</flux:command.item>
                <flux:command.item icon="book-open">Documentation</flux:command.item>
                <flux:command.item icon="newspaper">Changelog</flux:command.item>
                <flux:command.item icon="cog-6-tooth" kbd="⌘,">Settings</flux:command.item>
            </flux:command.items>
        </flux:command>
</flux:modal> --}}

<flux:modal 
    wire:model="show" 
    name="search"
    variant="bare"
    class="w-full max-w-[30rem] my-[12vh] max-h-screen overflow-y-hidden"
    x-on:click.self="$el.closeModal()"
    x-on:keydown.cmd.k.document="$el.showModal()"
>
        <flux:command class="border-none shadow-lg inline-flex flex-col max-h-[76vh]">
            <flux:command.input placeholder="Search..." closable />
            <flux:command.items class="">
                <flux:command.item icon="user-plus" kbd="⌘A">Assign to…</flux:command.item>
                <flux:command.item icon="document-plus">Create new file</flux:command.item>
                <flux:command.item icon="folder-plus" kbd="⌘⇧N">Create new project</flux:command.item>
                <flux:command.item icon="book-open">Documentation</flux:command.item>
                <flux:command.item icon="newspaper">Changelog</flux:command.item>
                <flux:command.item icon="cog-6-tooth" kbd="⌘,">Settings</flux:command.item>
            </flux:command.items>
        </flux:command>
</flux:modal>


    {{-- <flux:modal.trigger name="search2" shortcut="cmd.k">
        <flux:input as="button" placeholder="Search..." icon="magnifying-glass" kbd="⌘K" />
    </flux:modal.trigger>

    <flux:modal x-data="{show:false}" wire:model="show2" name="search2" variant="bare" class=" w-full max-w-[30rem] px-6" x-on:keydown.cmd.k.document="$el.showModal()" data-open>
        <flux:card>
        <div>Some content</div>

        <button x-on:click="show = !show">Toggle</button>

        <div x-show="show" class="h-[500px]">Some long content</div>
        </flux:card>
    </flux:modal> --}}
</div>
