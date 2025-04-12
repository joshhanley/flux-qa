<?php

use App\Models\User;
use Flux\Flux;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new
#[On('user-deleted')]
class extends Component
{
    #[Computed]
    public function users()
    {
        return User::limit(1)->get();
    }
};
?>

<div>
    <div>
        @foreach ($this->users as $user)
            <div wire:key="user-{{ $user->id }}">
                <livewire:user-card :user="$user" :key="$user->id" />
            </div>
        @endforeach
    </div>

    <livewire:user-delete-modal />
</div>
