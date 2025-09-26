<?php

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination, WithoutUrlPagination;

    #[Computed]
    public function users()
    {
        sleep(3);
        return User::orderBy('id', 'asc')->where('id', '<', 50)->paginate(10);
    }
} ?>

<div>
    @island(defer: true)
        <div class="space-y-8">
            <div class="space-y-4">
                @island(mode: 'append')
                    @foreach ($users as $user)
                        <div wire:key="{{ $user->id }}" class="py-4 border rounded">
                            <p>{{ $user->id }}: {{ $user->name }}</p>
                        </div>
                    @endforeach
                @endisland
            </div>
            @if ($this->users->hasMorePages())
                <div wire:intersect.full="nextPage" wire:loading.remove class="py-12 border rounded">Load more</div>
                <div wire:loading.block class="py-12 border rounded">Loading...</div>
            @else
                <div class="py-12 border rounded">No more users</div>
            @endif
        </div>
    @endisland
</div>
