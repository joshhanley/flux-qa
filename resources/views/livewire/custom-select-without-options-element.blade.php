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
                <flux:heading size="lg">Adding `custom` to the default select causes issues.</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    If you add `custom` to the default select but don't add a `flux:select.trigger` or `flux:options` components, the select breaks. It would be nice if we didn't have to add them.
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. See the user select below.
                </flux:text>
            </div>
        </flux:card.body>
    </flux:card>

    <div>
        <flux:select wire:model.live="userId" label="User" custom>
            @foreach ($this->users as $user)
                <flux:option value="{{ $user->id }}">{{ $user->name }}</flux:option>
            @endforeach
        </flux:select>
    </div> --}}
</div>
