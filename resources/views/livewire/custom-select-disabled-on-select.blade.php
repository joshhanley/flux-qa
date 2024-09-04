<?php

use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public $userId = null;

    #[Computed]
    public function users()
    {
        return User::query()->get();
    }
};

?>

<flux:body container class="space-y-4">
    <flux:card>
        <flux:card.header class="border-b bg-gray-50">Use this page to test the following issues</flux:card.header>
        <flux:card.body class="divide-y">
            <div>
                <flux:heading size="lg">Custom select with disalbed on select fails</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    Adding disabled to the select element, instead of the trigger element, does not disable the select. Currently the disaled needs to go on the trigger element instead, but that means
                    the label then doesn't get the disabled styles. Ideally, disabled should only need to go on the select element.
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. Click on the first User select below, it only has disabled on the select element, to see it still trigers.<br>
                    2. See User2 select, which only has disabled on the trigger, functions correctly but label doesn't have disabled styles.<br>
                    3. See User3 select, which has disabled on both the select and the trigger elements, this disables everything correctly but isn't a great user experience nor was it what I was
                    expecting.
                </flux:text>
            </div>

            <div>
                <flux:heading size="lg">Custom select with trigger disabled still has hover styles</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    When a custom select trigger is disabled, the hover styles are still applied to the trigger icon.
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. Hover over the User2 or User3 select below.<br>
                    2. View the trigger icon (chevron) is still displaying hover styles.
                </flux:text>
            </div>
        </flux:card.body>
    </flux:card>

    <div>
        <flux:select wire:model.live="userId" label="User" custom disabled>
            <flux:select.trigger placeholder="Choose user..." />

            <flux:options>
                @foreach ($this->users as $user)
                    <flux:option value="{{ $user->id }}">{{ $user->name }}</flux:option>
                @endforeach
            </flux:options>
        </flux:select>

        <flux:select wire:model.live="userId" label="User2" custom>
            <flux:select.trigger placeholder="Choose user..." disabled />

            <flux:options>
                @foreach ($this->users as $user)
                    <flux:option value="{{ $user->id }}">{{ $user->name }}</flux:option>
                @endforeach
            </flux:options>
        </flux:select>

        <flux:select wire:model.live="userId" label="User3" custom disabled>
            <flux:select.trigger placeholder="Choose user..." disabled />

            <flux:options>
                @foreach ($this->users as $user)
                    <flux:option value="{{ $user->id }}">{{ $user->name }}</flux:option>
                @endforeach
            </flux:options>
        </flux:select>
    </div>
</flux:body>
