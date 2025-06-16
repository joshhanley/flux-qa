<?php

use Livewire\Volt\Component;

new class extends Component {
    public function mount() {
        sleep(5);

        // $this->redirect('https://www.google.com');
        $this->redirect('/navigate3');
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
    Navigate 2

    {{-- <div class="h-[1000px]"></div> --}}

    <a href="/navigate" wire:navigate class="underline">Navigate</a>

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
