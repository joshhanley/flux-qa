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
            <flux:select.input wire:model.live="search" clearable />
        </x-slot>

        @foreach ($this->users as $user)
            <flux:select.option.variants.custom value="{{ $user->id }}" label="{{ $user->name }}">
                <div>
                    <p>{{ $user->name }}</p>
                    <p class="text-sm text-gray-500">{{ $user->email }}</p>
                </div>
            </flux:select.option.variants.custom>
        @endforeach
    </flux:select>
</div>

