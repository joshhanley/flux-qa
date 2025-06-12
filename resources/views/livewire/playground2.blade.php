<?php

use Livewire\Volt\Component;

new class extends Component {
    public function mount() {
        sleep(1);

        // $this->redirect('https://www.google.com');
        $this->redirect('/playground3');
    }
}; ?>

<div>
    @persist('nav')
    <div x-data="{ show: false }">
        <button x-on:click="show = !show">Toggle</button>
        <div x-show="show">
            <p><a href="/playground" wire:navigate class="underline" wire:current="font-bold">Playground</a></p>
            <p><a href="/playground2" wire:navigate class="underline" wire:current="font-bold">Playground 2</a></p>
            <p><a href="/playground3" wire:navigate class="underline" wire:current="font-bold">Playground 3</a></p>
        </div>
    </div>
    @endpersist
    Playground 2

    {{-- <div class="h-[1000px]"></div> --}}

    <a href="/playground" wire:navigate class="underline">Playground</a>

    {{-- <input type="text" autofocus/> --}}

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
