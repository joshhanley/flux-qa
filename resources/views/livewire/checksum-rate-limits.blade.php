
<?php

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Locked;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;

    public $count = 0;

    #[Locked]
    public bool $hasMorePages = true;

    #[Computed]
    public function users()
    {
        $users = User::query()->paginate(10);

        $this->hasMorePages = $users->hasMorePages();

        return $users;
    }

    public function toggleFavourite(User $user, bool $favourite): void
    {
        $user->update([
            'favourite' => $favourite,
        ]);
    }
};
?>

<div>
    {{-- <livewire:child wire:model="count" /> --}}

    @island(name: 'users')
        @foreach($this->users as $user)
            <div wire:key="user-{{ $user->id }}" class="flex items-center p-4 gap-4">
                <p>{{ $user->id }}: {{ $user->name }}</p>
                <a href="#" wire:click.renderless.prevent="toggleFavourite('{{ $user->id }}', @json(! $user->favourite))">
                    {{ $user->favourite ? 'Unfavourite' : 'Favourite' }}
                </a>
            </div>
        @endforeach
    @endisland

    <div wire:show="hasMorePages">
        <div wire:click="nextPage" wire:island.append="users">Load more</div>
    </div>
    <div wire:show="! hasMorePages" wire:cloak>
       No more user to show
    </div>
</div>