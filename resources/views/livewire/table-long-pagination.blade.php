<?php

use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;

    public $sortBy;
    public $sortDirection = 'asc';

    #[Computed]
    public function users()
    {
        return User::query()
            ->when($this->sortBy, fn($query) => $query->orderBy($this->sortBy, $this->sortDirection))
            ->paginate(1);
    }

    public function edit(User $user)
    {
        dump('edit', $user->toArray());
    }

    public function delete(User $user)
    {
        dump('delete', $user->toArray());
    }

    public function sort($column)
    {
        if ($this->sortBy === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $column;
            $this->sortDirection = 'asc';
        }
    }
};

?>

<flux:main class="space-y-4">

    <flux:heading size="lg">Users</flux:heading>

    <flux:table :paginate="$this->users">
        <flux:columns>
            <flux:column wire:click="sort('name')" sortable :sorted="$this->sortBy === 'name'" :direction="$this->sortDirection">Name</flux:column>
            <flux:column wire:click="sort('email')" sortable :sorted="$this->sortBy === 'email'" :direction="$this->sortDirection">Email</flux:column>
            <flux:column>Is verified?</flux:column>
            <flux:column>Created At</flux:column>
            <flux:column>Updated At</flux:column>
            <flux:column>Actions</flux:column>
        </flux:columns>

        <flux:rows>
            @foreach ($this->users as $user)
                <flux:row wire:key="$user->id">
                    <flux:cell>{{ $user->name }}</flux:cell>
                    <flux:cell>{{ $user->email }}</flux:cell>
                    <flux:cell>
                        @if ($user->email_verified_at)
                            <flux:badge color="green">Yes</flux:badge>
                        @else
                            <flux:badge color="red">No</flux:badge>
                        @endif
                    </flux:cell>
                    <flux:cell>{{ $user->created_at->diffForHumans() }}</flux:cell>
                    <flux:cell>{{ $user->updated_at->diffForHumans() }}</flux:cell>
                    <flux:cell>
                        <flux:dropdown position="bottom end">
                            <flux:button variant="ghost" size="sm" icon="ellipsis-horizontal" inset="top bottom"></flux:button>

                            <flux:menu>
                                <flux:menu.item wire:click="edit({{ $user->id }})">Edit</flux:menu.item>
                                <flux:menu.item wire:click="delete({{ $user->id }})">Delete</flux:menu.item>
                            </flux:menu>
                        </flux:dropdown>
                    </flux:cell>
                </flux:row>
            @endforeach
        </flux:rows>
    </flux:table>
</flux:main>
