<?php

use Livewire\Volt\Component;

new class extends Component {
    public $show = false;
}; ?>

<div>
    <flux:date-picker />
    <flux:button wire:click="$refresh">Refresh</flux:button>
    <a href="/playground" wire:navigate>Playground</a>
    <flux:modal.trigger name="edit-profile">
        <flux:button>Edit profile</flux:button>
    </flux:modal.trigger>

    <flux:modal wire:model="show" name="edit-profile" class="md:w-96" autofocus="false">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Update profile</flux:heading>
                <flux:text class="mt-2">Make changes to your personal details.</flux:text>
            </div>

            <flux:input label="Name" placeholder="Your name" />
            <flux:input label="Name2" placeholder="Your name2" />

            <flux:input label="Date of birth" type="date" />

            <div class="flex">
                <flux:spacer />

                <flux:button type="submit" variant="primary">Save changes</flux:button>
            </div>
        </div>
    </flux:modal>
</div>