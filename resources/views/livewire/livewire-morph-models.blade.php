<?php

use App\Models\User;
use Carbon\Carbon;
use Flux\Flux;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public $search = '';
    
    #[Computed]
    public function users() 
    {
        return User::query()
            ->when($this->search, fn($query, $value) => $query->where('name', 'like', '%' . $value . '%'))
            ->limit(10000)
            ->get();
    }
}; ?>

<div>
    <flux:input wire:model.live="search" />

    <div>
        @foreach ($this->users as $key => $user)
            <div>
                <livewire:child-user :$user />
            </div>
        @endforeach
    </div>
</div>
