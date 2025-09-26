<?php

new class {

} ?>

<div>
    {{-- <a href="/playground" wire:navigate>Playground</a>
    <a href="/stack-of-toasts" wire:navigate>Stack of Toasts</a> --}}
    <flux:button x-data="{ count: 0 }" x-on:click="window.Flux.toast({
        heading: 'Changes saved ' + count++,
        text: 'Saved!',
        variant: 'success',
        duration: 30000,
        {{-- position: 'top right', --}}
    })">
        Shortest toast
    </flux:button>
    <flux:button x-data="{ count: 0 }" x-on:click="window.Flux.toast({
        heading: 'Changes saved ' + count++,
        text: 'Your changes have been saved a bit longer.',
        variant: 'success',
        duration: 30000,
        {{-- position: 'top right', --}}
    })">
        Short toast
    </flux:button>
    <flux:button x-data="{ count: 0 }" x-on:click="window.Flux.toast({
        heading: 'Changes saved ' + count++,
        text: 'Your changes have been saved a bit longer and longer again.',
        variant: 'success',
        duration: 30000,
        {{-- position: 'top right', --}}
    })">
        Medium toast
    </flux:button>
    <flux:button x-data="{ count: 0 }" x-on:click="window.Flux.toast({
        heading: 'Changes saved ' + count++,
        text: 'Your changes have been saved. Your changes have been saved. Your changes have been saved.',
        variant: 'danger',
        duration: 30000,
    })">
        Longest toast
    </flux:button>

    {{-- <flux:button x-on:click="$dispatch('add-random')">Add random</flux:button> --}}
</div>
