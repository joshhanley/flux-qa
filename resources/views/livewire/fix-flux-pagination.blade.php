<?php

use Livewire\Attributes\Url;
use Livewire\Volt\Component;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;

    public $sortBy = 'id';
    public $sortDirection = 'asc';

    #[Url]
    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function updateToBob()
    {
        $this->search = 'bob';
    }

    #[\Livewire\Attributes\Computed]
    public function users()
    {
        return \App\Models\User::query()
            ->tap(fn ($query) => $this->sortBy ? $query->orderBy($this->sortBy, $this->sortDirection) : $query)
            ->when($this->search, fn ($query) => $query->where('name', 'like', '%' . $this->search . '%'))
            ->paginate(50)
            ->withQueryString();
    }

    #[\Livewire\Attributes\Computed]
    public function otherUsers()
    {
        return \App\Models\User::query()
            ->orderBy('id')
            ->paginate(50, ['*'], 'random')
            ->withQueryString();
    }
    
    public function sort($column) {
        if ($this->sortBy === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $column;
            $this->sortDirection = 'asc';
        }
    }
}; ?>

<div class="p-4">
    {{-- <flux:button wire:click="$refresh">Refresh</flux:button>
    <flux:button wire:click="updateToBob">Update to Bob</flux:button>
    <flux:heading>Users</flux:heading>
    <flux:input wire:model.live="search" placeholder="Search" />
    <flux:table>
        <flux:table.columns>
            <flux:table.column>ID</flux:table.column>
            <flux:table.column sortable :sorted="$sortBy === 'name'" :direction="$sortDirection" wire:click="sort('name')">Name</flux:table.column>
            <flux:table.column sortable :sorted="$sortBy === 'email'" :direction="$sortDirection" wire:click="sort('email')">Email</flux:table.column>
        </flux:table.columns>

        <flux:table.rows>
            @foreach ($this->users as $user)
                <flux:table.row :key="$user->id">
                    <flux:table.cell class="flex items-center gap-3">
                        {{ $user->id }}
                    </flux:table.cell>

                    <flux:table.cell class="whitespace-nowrap">{{ $user->name }}</flux:table.cell>

                    <flux:table.cell variant="strong">{{ $user->email }}</flux:table.cell>

                    <flux:table.cell>
                        <flux:button variant="ghost" size="sm" icon="ellipsis-horizontal" inset="top bottom"></flux:button>
                    </flux:table.cell>
                </flux:table.row>
            @endforeach
        </flux:table.rows>
    </flux:table>

    <flux:paginator :items="$this->users" preserve-scroll /> --}}


    <flux:heading>Other Users</flux:heading>
    <flux:table :paginator="$this->otherUsers" paginator:preserve-scroll paginator:normal-attribute>
        {{-- <flux:table.columns>
            <flux:table.column>ID</flux:table.column>
            <flux:table.column sortable :sorted="$sortBy === 'name'" :direction="$sortDirection" wire:click="sort('name')">Name</flux:table.column>
            <flux:table.column sortable :sorted="$sortBy === 'email'" :direction="$sortDirection" wire:click="sort('email')">Email</flux:table.column>
        </flux:table.columns>

        <flux:table.rows>
            @foreach ($this->otherUsers as $user)
                <flux:table.row :key="$user->id">
                    <flux:table.cell class="flex items-center gap-3">
                        {{ $user->id }}
                    </flux:table.cell>

                    <flux:table.cell class="whitespace-nowrap">{{ $user->name }}</flux:table.cell>

                    <flux:table.cell variant="strong">{{ $user->email }}</flux:table.cell>

                    <flux:table.cell>
                        <flux:button variant="ghost" size="sm" icon="ellipsis-horizontal" inset="top bottom"></flux:button>
                    </flux:table.cell>
                </flux:table.row>
            @endforeach
        </flux:table.rows> --}}
    </flux:table>
</div>
