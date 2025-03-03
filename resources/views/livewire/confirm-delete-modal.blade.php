<?php

use App\Models\User;
use Flux\Flux;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public $showModal = false;

    #[Computed]
    public function users()
    {
        return User::all();
    }

    public function deleteUser($userId)
    {
        // Authorize the action
        // Delete the user

        Flux::modal('delete-user')->close();
    }
};
?>

<div>
    <flux:table>
        <flux:table.columns>
            <flux:table.column>Name</flux:table.column>
            <flux:table.column>Actions</flux:table.column>
        </flux:table.columns>

        <flux:table.rows>
            @foreach ($this->users as $user)
                <flux:table.row :wire:key="$user->id">
                    <flux:table.cell>{{ $user->name }}</flux:table.cell>
                    <flux:table.cell>
                        <flux:modal.trigger name="delete-user">
                            <flux:button variant="danger" wire:click="$dispatch('delete-user', {{ $user->id }})">Delete</flux:button>
                        </flux:modal.trigger>
                    </flux:table.cell>
                </flux:table.row>
            @endforeach
        </flux:table.rows>
    </flux:table>

    <flux:modal
        name="delete-user"
        x-data="{ userId: null}"
        x-on:delete-user.window="userId = $event.detail"
        class="min-w-[22rem]">
        <div class="space-y-6">
            <div>
                <flux:heading size="lg">Delete user?</flux:heading>

                <flux:subheading>
                    <p>You're about to delete this user.</p>
                    <p>This action cannot be reversed.</p>
                </flux:subheading>
            </div>

            <div class="flex gap-2">
                <flux:spacer />

                <flux:modal.close>
                    <flux:button variant="ghost">Cancel</flux:button>
                </flux:modal.close>

                <flux:button x-on:click="$wire.deleteUser(userId)" variant="danger">Delete user</flux:button>
            </div>
        </div>
    </flux:modal>
</div>