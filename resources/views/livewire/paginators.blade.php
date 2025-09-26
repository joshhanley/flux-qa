<?php

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;

    #[Computed]
    public function users()
    {
        return User::orderBy('name', 'asc')->paginate();
    }

    #[Computed]
    public function otherUsers()
    {
        return User::orderBy('name', 'desc')->paginate(pageName: 'other');
    }
} ?>

<div>
    <div>
        @foreach ($users as $user)
            <div>
                <p>{{ $user->name }}</p>
            </div>
        @endforeach
    </div>

    <flux:button wire:click="$paginator.previousPage()">
        Previous Users
    </flux:button>

    <flux:button wire:click="$paginator.nextPage()">
        Next Users
    </flux:button>

    <flux:button wire:click="$paginator().previousPage()">
        Previous Users as function
    </flux:button>

    <flux:button wire:click="$paginator().nextPage()">
        Next Users as function
    </flux:button>

    <div>
        @foreach ($otherUsers as $user)
            <div>
                <p>{{ $user->name }}</p>
            </div>
        @endforeach
    </div>

    <flux:button wire:click="$paginator('other').previousPage()">
        Previous Other
    </flux:button>

    <flux:button wire:click="$paginator('other').nextPage()">
        Next Other
    </flux:button>
</div>