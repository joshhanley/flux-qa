<?php

use Livewire\Volt\Component;

new class extends Component {
    public $show = true;
    public function setPlace($place)
    {
        ray($place);
    }
}; ?>

<div>
    {{-- <x-address-autocomplete label="Address" wire:click="setPlace" /> --}}
    <flux:modal.trigger name="edit-profile">
        <flux:button>Edit profile</flux:button>
    </flux:modal.trigger>

    <flux:modal wire:model="show" name="edit-profile" class="md:w-96">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Update profile</flux:heading>
                <flux:subheading>Make changes to your personal details.</flux:subheading>
            </div>

            <flux:input label="Name" placeholder="Your name" />

            <flux:input label="Date of birth" type="date" />

            <x-address-autocomplete label="Address" wire:click="setPlace" />

            <div class="flex">
                <flux:spacer />

                <flux:button type="submit" variant="primary">Save changes</flux:button>
            </div>
        </div>
    </flux:modal>
</div>
