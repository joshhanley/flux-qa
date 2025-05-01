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
        <flux:table.columns>
            <flux:table.column wire:click="sort('name')" sortable :sorted="$this->sortBy === 'name'" :direction="$this->sortDirection">Name</flux:table.column>
            <flux:table.column wire:click="sort('email')" sortable :sorted="$this->sortBy === 'email'" :direction="$this->sortDirection">Email</flux:table.column>
            <flux:table.column>Is verified?</flux:table.column>
            <flux:table.column>Created At</flux:table.column>
            <flux:table.column>Updated At</flux:table.column>
            <flux:table.column>Actions</flux:table.column>
        </flux:table.columns>

        <flux:table.rows>
            @foreach ($this->users as $user)
                <flux:table.row wire:key="$user->id">
                    <flux:table.cell>{{ $user->name }}</flux:table.cell>
                    <flux:table.cell>{{ $user->email }}</flux:table.cell>
                    <flux:table.cell>
                        @if ($user->email_verified_at)
                            <flux:badge color="green">Yes</flux:badge>
                        @else
                            <flux:badge color="red">No</flux:badge>
                        @endif
                    </flux:table.cell>
                    <flux:table.cell>{{ $user->created_at->diffForHumans() }}</flux:table.cell>
                    <flux:table.cell>{{ $user->updated_at->diffForHumans() }}</flux:table.cell>
                    <flux:table.cell>
                        <flux:dropdown position="bottom end">
                            <flux:button variant="ghost" size="sm" icon="ellipsis-horizontal" inset="top bottom"></flux:button>

                            <flux:menu>
                                <flux:menu.item wire:click="edit({{ $user->id }})">Edit</flux:menu.item>
                                <flux:menu.item wire:click="delete({{ $user->id }})">Delete</flux:menu.item>
                            </flux:menu>
                        </flux:dropdown>
                    </flux:table.cell>
                </flux:table.row>
            @endforeach
        </flux:table.rows>
    </flux:table>
</flux:main>
