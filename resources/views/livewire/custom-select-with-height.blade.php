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

<div class="space-y-4">
    {{-- <flux:card>
        <flux:card.header class="border-b bg-gray-50">Use this page to test the following issues</flux:card.header>
        <flux:card.body class="divide-y">
            <div>
                <flux:heading size="lg">Custom select with a max height causes strange scrolling in smaller brower windows.</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    If a custom select dropdown has a max height set, it causes strange scrolling issues when the browser window is about the same height or less as the dropdown.
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. Click the user select below.<br>
                    2. Make browser window small.<br>
                    3. Scroll up and down.
                </flux:text>
            </div>
        </flux:card.body>
    </flux:card>

    <div>
        <flux:select wire:model.live="userId" label="User" custom>
            <flux:select.trigger placeholder="Choose user..." />

            <flux:options class="max-h-56">
                @foreach ($this->users as $user)
                    <flux:option value="{{ $user->id }}">{{ $user->name }}</flux:option>
                @endforeach
            </flux:options>
        </flux:select>
    </div> --}}
</div>
