<?php

use Livewire\Volt\Component;
use Mary\Traits\Toast;

new class extends Component {
    use Toast;

    public function maryUi1()
    {
        $this->toast(
            type: 'success',
            title: 'It is done!',
            description: null,                  // optional (text)
            //position: 'toast-top toast-end',    // optional (daisyUI classes)
            icon: 'o-information-circle',       // Optional (any icon)
            css: 'alert-info',                  // Optional (daisyUI classes)
            timeout: 3000,                      // optional (ms)
            redirectTo: null                    // optional (uri)
        );
    }

    public function maryUi2()
    {
        $this->toast(
            type: 'success',
            title: 'It is done2!',
            description: null,                  // optional (text)
            position: 'toast-bottom toast-end',    // optional (daisyUI classes)
            icon: 'o-information-circle',       // Optional (any icon)
            css: 'alert-info',                  // Optional (daisyUI classes)
            timeout: 3000,                      // optional (ms)
            redirectTo: null                    // optional (uri)
        );
    }
}; ?>

<div class="p-4">
    <button x-on:click="$flux.toast({
        heading: 'Success!',
        text: 'Your changes have been saved',
        variant: 'success',
        duration: 3000
    })">
        Click me
    </button>

    <button wire:click="maryUi1">
        Mary UI 1 
    </button>

    <button wire:click="maryUi2">
        Mary UI 2
    </button>
</div>
