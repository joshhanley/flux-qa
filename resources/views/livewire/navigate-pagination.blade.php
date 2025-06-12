<?php

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

new class extends Component {
    use WithPagination;

    #[Url]
    public $foo = 'bar';

    #[Computed]
    public function users()
    {
        return User::orderBy('id')->paginate(10);
    }
}; ?>

<div>
    <a href="/playground" wire:navigate>Playground</a>
    <div>
        @foreach ($this->users as $user)
            <div>
                {{ $user->id }}: {{ $user->name }}
            </div>
        @endforeach
    </div>
    <div>
        {{ $this->users->links() }}
    </div>
</div>
