<?php

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public $user_id = 5;
    public $user_name = 'test';

    #[Computed]
    public function users()
    {
        return User::all();
    }
};
?>

<flux:main>
    <flux:brand name="test" href="#" :logo="asset('app_assets/logos/logo1.png')" />
    <flux:brand name="test" href="#" logo="{{ asset('app_assets/logos/logo1.png') }}" />
    <p>
        <strong>User ID:</strong> {{ $this->user_id }}
    </p>
    <p>
        <strong>User Name:</strong> {{ $this->user_name }}
    </p>
    <flux:select
        label="User"
        variant="listbox"
        searchable
        placeholder="Find user"
        wire:model.live="user_id">
        <x-slot name="search">
            <flux:select.search placeholder="Search" wire:model.live="user_name" wire:keyup="search" />
        </x-slot>
        @foreach ($this->users as $user)
            <flux:select.option value="{{ $user->id }}">{{ $user->name }}</flux:select.option>
        @endforeach
    </flux:select>
</flux:main>
