<?php

use Flux\Flux;

use Livewire\Volt\Component;

new class extends Component {
    public function save()
    {
        Flux::toast('Your changes have been saved.');
    }
};

?>

<flux:main>
    <flux:heading size="xl">Modal</flux:heading>

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



    <flux:heading size="xl">Dropdown</flux:heading>

    <flux:dropdown>

        <flux:button icon-trailing="chevron-down">Options</flux:button>



        <flux:menu>

            <flux:menu.item icon="plus">New post</flux:menu.item>



            <flux:menu.separator />



            <flux:menu.submenu heading="Sort by">

                <flux:menu.radio.group>

                    <flux:menu.radio checked>Name</flux:menu.radio>

                    <flux:menu.radio>Date</flux:menu.radio>

                    <flux:menu.radio>Popularity</flux:menu.radio>

                </flux:menu.radio.group>

            </flux:menu.submenu>



            <flux:menu.separator />



            <flux:menu.item variant="danger" icon="trash">Delete</flux:menu.item>

        </flux:menu>

    </flux:dropdown>



    <form wire:submit="save">

        <flux:heading size="xl">Toast</flux:heading>

        <flux:button type="submit">Save</flux:button>

    </form>



    <flux:toast />
</flux:main>
