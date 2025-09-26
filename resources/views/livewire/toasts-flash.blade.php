<?php

new class {

} ?>

<div>
    <flux:button x-on:click="window.Flux.toast({
        heading: 'Changes saved',
        text: 'Your changes have been saved.',
        variant: 'success',
        duration: 0,
    })">
        Dispatch toast
    </flux:button>
    <flux:link href="/toasts-flash" class="block! mt-4" wire:navigate>Navigate to toasts page</flux:link>
</div>
