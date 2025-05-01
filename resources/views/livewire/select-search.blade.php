<?php

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public $userId = null;
    public $userName = null;

    #[Computed]
    public function users()
    {
        if (!$this->userName) {
            return collect();
        }

        return User::query()
            ->when($this->userName, fn($query) => $query->where('name', 'like', "%{$this->userName}%"))
            ->get();
    }
};

?>

<flux:main>
    <flux:text>User ID: {{ $userId }}</flux:text>
    <flux:text>User Name: {{ $userName }}</flux:text>

    <flux:select
        wire:model="userId"
        variant="listbox"
        searchable
        :filter="false"
        placeholder="Select a user">
        <x-slot name="search">
            <flux:select.search wire:ignore wire:model.live.debounce.500ms="userName" placeholder="Search for a user" />
        </x-slot>

        @forelse ($this->users as $user)
            <flux:select.option wire:key="team-{{ $user->id }}" value="{{ $user->id }}">{{ $user->name }}</flux:select.option>
        @empty
            <flux:select.option wire:key="team-empty" value="">
                Enter a name to search
            </flux:select.option>
        @endforelse
    </flux:select>
</flux:main>
