<?php

use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new class extends Component {
    //
};

?>

<flux:main x-on:modal-close.window="console.log($event.detail)" class="space-y-4 w-96">
    <flux:modal.trigger name="edit-profile">
        <flux:button>Edit profile</flux:button>
    </flux:modal.trigger>

    <flux:modal name="edit-profile" class="md:w-96 space-y-6">
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
