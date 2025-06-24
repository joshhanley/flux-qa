<?php

use Livewire\Component;

new class extends Component {
    public $value = '';
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
    Navigate

    {{-- <div class="h-[1000px]"></div> --}}

    <a href="/navigate2" wire:navigate class="underline">Page 2</a>

    {{-- <input type="text" autofocus/> --}}

    {{-- @persist('spin')
    <flux:icon.arrow-up class="w-10 h-10 [--animate-spin:spin_4s_linear_infinite] animate-spin" />
    @endpersist --}}

    {{-- @persist('child')
    <livewire:navigate-persist-child wire:key="child" />
    @endpersist --}}
    {{-- <p>Value: <span x-text="$wire.value"></span></p> --}}
    {{-- <livewire:child wire:model="value" lazy /> --}}
</div>
{{-- @script
<script>
    document.addEventListener('livewire:navigate', (event) => {
        console.log('navigate', event);
    });
    document.addEventListener('livewire:navigated', (event) => {
        console.log('navigated', event);
        Livewire.on('random', (event) => {
            console.log('random', event);
        });
    });

    document.addEventListener('livewire:navigated', () => { console.log(Livewire.all()) })
    document.addEventListener('livewire:initialized', (event) => {
        console.log('initialized', event);
    });
</script>
@endscript --}}
