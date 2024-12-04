<?php

use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new class extends Component {
    public $show = false;

    public function close()
    {
        $this->show = true;
    }
};

?>

<flux:main class="space-y-4 w-96">
    <span
        x-data="{ show: $wire.$entangle('show') }"
        x-show="show"
        x-on:modal-close.window="show = true; setTimeout(() => show = false, 2000)"
        x-cloak>
        Modal closed
    </span>

    <flux:modal.trigger name="edit-profile">
        <flux:button>Edit profile</flux:button>
    </flux:modal.trigger>

    <flux:modal name="edit-profile" class="md:w-96 space-y-6">
        <x-slot:close>
            <flux:button wire:click="close" variant="ghost" icon="x-mark" size="sm" alt="Close modal" class="!text-zinc-400 hover:!text-zinc-800 dark:!text-zinc-500 dark:hover:!text-white">
            </flux:button>
        </x-slot:close>
        <div>
            <flux:heading size="lg">Update profile</flux:heading>
            <flux:subheading>Make changes to your personal details.</flux:subheading>
        </div>

        <flux:input label="Name" placeholder="Your name" />

        <flux:input label="Date of birth" type="date" />

        <div class="flex">
            <flux:spacer />

            <flux:button type="submit" variant="primary">Save changes</flux:button>
        </div>
    </flux:modal>
</flux:main>
