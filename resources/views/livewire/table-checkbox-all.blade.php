<?php

use Flux\DateRange;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    use \Livewire\WithPagination;

    public $selectedUsers = [];

    public $sortBy = 'date';
    public $sortDirection = 'desc';

    public function sort($column) {
        if ($this->sortBy === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $column;
            $this->sortDirection = 'asc';
        }
    }

    #[\Livewire\Attributes\Computed]
    public function users()
    {
        return \App\Models\User::query()
            ->tap(fn ($query) => $this->sortBy ? $query->orderBy($this->sortBy, $this->sortDirection) : $query)
            ->paginate(5);
    }
};
?>

<div>
    <flux:text>Selected Users: {{ var_export($this->selectedUsers, true) }}</flux:text>
    <flux:checkbox.group wire:model.live="selectedUsers">
        <flux:table :paginate="$this->users">
            <flux:table.columns>
                <flux:table.column>
                    <flux:checkbox.all />
                </flux:table.column>
                @php
                    $column = [
                        'sortable' => false,
                        'value' => 'name',
                    ];
                @endphp
                <flux:table.column
                    :sortable="isset($column['sortable']) && $column['sortable']"
                    :sorted="$sortBy === $column['value']"
                    wire:click="sort('{{ $column['value'] }}')">
                    Name
                </flux:table.column>
                {{-- <flux:table.column sortable :sorted="$sortBy === 'name'" :direction="$sortDirection" wire:click="sort('name')">Name</flux:table.column> --}}
                <flux:table.column sortable :sorted="$sortBy === 'email'" :direction="$sortDirection" wire:click="sort('email')">Email</flux:table.column>
                <flux:table.column>Random</flux:table.column>
                <flux:table.column sortable :sorted="$sortBy === 'created_at'" :direction="$sortDirection" wire:click="sort('created_at')">Signed up</flux:table.column>
            </flux:table.columns>

            <flux:table.rows>
                @foreach ($this->users as $user)
                    <flux:table.row :key="$user->id">
                        <flux:table.cell>
                            <flux:checkbox :value="$user->id" />
                        </flux:table.cell>

                        <flux:table.cell class="flex items-center gap-3">{{ $user->name }}</flux:table.cell>

                        <flux:table.cell class="whitespace-nowrap">{{ $user->email }}</flux:table.cell>

                        <flux:table.cell>
                            <flux:input />
                        </flux:table.cell>

                        <flux:table.cell variant="strong">{{ $user->created_at->diffForHumans() }}</flux:table.cell>

                        <flux:table.cell>
                            <flux:button variant="ghost" size="sm" icon="ellipsis-horizontal" inset="top bottom"></flux:button>
                        </flux:table.cell>
                    </flux:table.row>
                @endforeach
            </flux:table.rows>
        </flux:table>
    </flux:checkbox.group>
</div>
