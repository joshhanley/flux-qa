<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <button x-on:click="$flux.toast({
        heading: 'Success!',
        text: 'Your changes have been saved',
        variant: 'success',
        duration: 3000
    })">
        Click me
    </button>
</div>
