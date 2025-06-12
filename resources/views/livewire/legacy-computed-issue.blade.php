<?php

use App\Models\User;
use App\Services\Service2;
use App\Services\Service;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new class extends Component {
    #[Computed]
    public function users()
    {
        return User::limit(1)->get();
    }

    #[Computed]
    public function service()
    {
        ray('service');
        return new Service();
    }

    public function getServiceProperty()
    {
        ray('service2');
        return new Service2();
    }
}; ?>

<div>
    {{-- <a href="/navigate-pagination" wire:navigate>Navigate Pagination</a> --}}
    @foreach ($this->users as $user)
        <div>
            {{-- {{ $user->name }} --}}
            {{ $this->service->toUppercase($user->name) }}
        </div>
    @endforeach
</div>
