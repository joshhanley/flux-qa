<?php

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public $search = '';

    public $userId;

    #[Computed]
    public function users() {
        return User::query()
            ->when($this->search, fn($query) => $query->where('name', 'like', '%' . $this->search . '%'))
            ->limit(20)
            ->get();
    }
}; ?>

<div>
    <flux:select wire:model="userId" variant="combobox" :filter="false">
        <x-slot name="input">
            <flux:select.input wire:model.live="search" />
        </x-slot>

        @foreach ($this->users as $user)
            <flux:select.option value="{{ $user->id }}">
                {{ $user->name }}
            </flux:select.option>
        @endforeach
    </flux:select>
</div>

