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
                <flux:heading size="lg">Really long custom select causes scrolling issues</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    A really long list causes scrolling issues
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. Click the user select below.<br>
                    2. Scroll to the bottom of the list.<br>
                    3. Try to keep scrolling and watch the scroll bar on the right, jumps and gets longer and longer.
                </flux:text>
            </div>
        </flux:card.body>
    </flux:card>

    <div>
        <flux:select wire:model.live="userId" label="User" custom>
            <flux:select.trigger placeholder="Choose user..." />

            <flux:options>
                @foreach ($this->users as $user)
                    <flux:option value="{{ $user->id }}">{{ $user->name }}</flux:option>
                @endforeach
            </flux:options>
        </flux:select>
    </div>
</flux:body>
