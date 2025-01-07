<?php

use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public $name;

    public $email;

    public $enableNotifications = false;

    public $location;

    public $gender;

    public $notificationPreferences = [];

    public $bio;

    public $referrer;

    public function save()
    {
        dump('saved', $this->name, $this->email, $this->enableNotifications, $this->location, $this->gender, $this->notificationPreferences, $this->bio, $this->referrer);
    }
};

?>

<div class="space-y-4">
    {{-- <flux:card>
        <flux:card.header class="border-b bg-gray-50">Use this page to test the following issues</flux:card.header>
        <flux:card.body class="divide-y">
            <div>
                <flux:heading size="lg">Checkbox/radio disabled on one disables all</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    If you put disabled on a checkbox or radio button in a group, then all get the disabled style but only the one is disabled.
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. Have a look at the Gender field below, only Male is disabled but all look disabled. <br />
                    2. Female and Other still work just look disabled.
                </flux:text>
            </div>

            <div>
                <flux:heading size="lg">Disabled on checkbox/radio group does nothing</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    If you put disabled on a checkbox group or radio group, then nothing happens, but I would expect all of them to be disabled and the label also get the disabled style.
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. Have a look at the notification preferences field below, they should all be disabled until you enable notifications.
                </flux:text>
            </div>
        </flux:card.body>
    </flux:card>

    <form wire:submit="save" class="grid grid-cols-1 gap-4 max-w-96 mx-auto">
        <flux:field>
            <flux:label>Name!</flux:label>
            <flux:input wire:model="name" />
            <flux:error name="name" />
            <flux:description>Please enter your name</flux:description>
        </flux:field>

        <flux:input wire:model="email" type="email" label="Email" description="Email must be unique" />

        <flux:select wire:model="location" label="Location" custom>
            <flux:select.trigger placeholder="Choose location" />

            <flux:options>
                <flux:option value="AU">Australia</flux:option>
                <flux:option value="US">United States</flux:option>
            </flux:options>
        </flux:select>

        <flux:textarea rows="auto" wire:model="bio" label="Bio" />

        <flux:radio.group wire:model="gender" label="Gender">
            <flux:radio value="M" label="Male" disabled />
            <flux:radio value="F" label="Female" />
            <flux:radio value="O" label="Other" />
        </flux:radio.group>

        <flux:switch wire:model.live="enableNotifications" label="Enable notifications" />

        <flux:checkbox.group :disabled="!$enableNotifications" wire:model="notificationPreferences" label="Notification Preferences">
            <flux:checkbox value="marketing" label="Marketing" />
            <flux:checkbox value="research" label="Research" />
        </flux:checkbox.group>

        <flux:autocomplete>
            <flux:input wire:model="referrer" label="Referrer" placeholder="Choose referrer..." />

            <flux:autocomplete.items class="max-h-56">
                <flux:autocomplete.item wire:key="1" value="1">Bob</flux:autocomplete.item>
                <flux:autocomplete.item wire:key="2" value="2">Steve</flux:autocomplete.item>
            </flux:autocomplete.items>
        </flux:autocomplete>

        <div class="flex gap-4">
            <flux:button type="submit" variant="primary">Save</flux:button>
            <flux:button>Cancel</flux:button>
        </div>
    </form> --}}
</div>
