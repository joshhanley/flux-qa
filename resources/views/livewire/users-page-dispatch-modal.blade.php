<?php

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    #[Computed]
    public function users()
    {
        return User::limit(10)->get();
    }
} ?>

<div class="p-4">
    <flux:table>
        <flux:table.columns>
            <flux:table.column>Name</flux:table.column>
            <flux:table.column>Action</flux:table.column>
        </flux:table.columns>

        <flux:table.rows>
            @foreach ($this->users as $user)
                <flux:table.row>
                    <flux:table.cell>{{ $user->name }}</flux:table.cell>
                    <flux:table.cell align="end">
                        <flux:modal.trigger name="edit-user">
                            <flux:button icon="pencil-square" wire:click="$dispatch('edit-user', {userId: {{ $user->id }}})">
                                Edit
                            </flux:button>
                        </flux:modal.trigger>
                    </flux:table.cell>
                </flux:table.row>
            @endforeach
        </flux:table.rows>
    </flux:table>

    <livewire:edit-user-modal-old />
</div>
