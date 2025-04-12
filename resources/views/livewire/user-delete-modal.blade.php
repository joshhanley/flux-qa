<?php

use App\Models\User;
use Flux\Flux;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new class extends Component
{
    public ?User $user = null;

    #[On('delete-user-confirmation')]
    public function loadUser(int $id): void
    {
        $this->user = User::find($id);
    }

    public function deleteUser(): void
    {
        $this->user->delete();

        $this->user = null;

        $this->dispatch('user-deleted');
    }
};
?>

<div>
    Do you wish to delete: {{ $user?->id }} - {{ $user?->name }}?

    <flux:button wire:click="deleteUser" variant="danger">
        Confirm Delete
    </flux:button>
</div>
