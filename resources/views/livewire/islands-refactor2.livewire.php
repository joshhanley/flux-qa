<?php

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination, WithoutUrlPagination;

    #[Computed]
    public function users() {
        return User::orderBy('id', 'asc')->where('id', '<', 50)->paginate()->withPath('/islands-refactor');
    }

    public function save($id)
    {
        ray('save', $id);
    }
} ?>

<div>
    <flux:button wire:click="save(1)">Save</flux:button>
    <flux:button wire:click="save(1)" wire:island="bob">Island Save</flux:button>
    <div class="h-[1500px]"></div>
    {{-- <div wire:intersect="save(3)">Intersect Save</div> --}}
    @island
        <div>
            @island(mode: 'append')
                @foreach ($this->users as $user)
                    <div>
                        {{ $user->id }} {{ $user->name }}
                    </div>
                @endforeach
                {{-- <div wire:intersect="save(3)">
                    Island content
                    <button wire:click="$refresh" x-on:click="$wire.$island('bob')">Island refresh</button>
                    <p>Island time: {{ now() }}</p>
                    <flux:button wire:click="save(2)">Island Save</flux:button>
                </div> --}}
            @endisland
        </div>

        <div class="h-48">
            Load more
        </div>

        <div wire:intersect="nextPage()">
        </div>
    @endisland

    {{-- <p>Component time: {{ now() }}</p>
    <button wire:click="$refresh">Component refresh</button>

    <x-islandinblade /> --}}
</div>
