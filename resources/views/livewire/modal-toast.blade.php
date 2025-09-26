<?php

use Flux\Flux;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    public function doSomething()
    {
        Flux::modal('edit-profile')->show();
        Flux::toast('Hello, world!');
    }
}; ?>

<div>
    <flux:button wire:click="doSomething">Do something</flux:button>

    <flux:modal.trigger name="edit-profile">
        <flux:button>Edit profile</flux:button>
    </flux:modal.trigger>

    <flux:modal name="edit-profile" variant="flyout">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Update profile</flux:heading>
                <flux:text class="mt-2">Make changes to your personal details.</flux:text>
            </div>

            <flux:input label="Name" placeholder="Your name" />

            <flux:input label="Date of birth" type="date" />

            <div class="flex">
                <flux:spacer />

                <flux:button type="submit" variant="primary">Save changes</flux:button>
            </div>

            <flux:button x-on:click="$flux.toast('Hello, world2!')">Toast</flux:button>
        </div>
    </flux:modal>
</div>
