<?php

use Livewire\Attributes\Validate;
use Livewire\Component;

new class extends Component {
    #[Validate('required')]
    public $value = '';

    public function mount()
    {
        // sleep(1);

        // $this->redirect('https://www.google.com');
    }

    public function save()
    {
        $this->validate();
    }
}; ?>

<div>
    @persist('nav')
    <div x-data="{ show: false }">
        <button x-on:click="show = !show">Toggle</button>
        <div x-show="show">
            <p><a href="/navigate" wire:navigate class="underline" wire:current="font-bold">Navigate</a></p>
            <p><a href="/navigate2" wire:navigate class="underline" wire:current="font-bold">Navigate 2</a></p>
            <p><a href="/navigate3" wire:navigate class="underline" wire:current="font-bold">Navigate 3</a></p>
        </div>
    </div>
    @endpersist
    Navigate 3

    {{-- <div class="h-[1000px]"></div> --}}

    <a href="/navigate" wire:navigate class="underline">Navigate</a>

    <input type="text" autofocus wire:model="value" />
    @error('value'){{ $message }}@enderror
    <button wire:click="save">Save</button>
    <button wire:click="$refresh">Refresh</button>

    {{-- @persist('spin')
    <flux:icon.arrow-up class="w-10 h-10 [--animate-spin:spin_4s_linear_infinite] animate-spin" />
    @endpersist --}}

    {{-- @persist('child')
    <livewire:navigate-persist-child wire:key="child" />
    @endpersist --}}

    <div class="h-[1000px]"></div>
    <h1 id="here">Here</h1>
    <div class="h-[1000px]"></div>
</div>
