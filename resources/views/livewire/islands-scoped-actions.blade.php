<?php

use Livewire\Component;

new class extends Component {
    //
} ?>

<div>
    <p>Component time: {{ now() }}</p>
    <button wire:click="$refresh">Component refresh</button>
    @island
        <div>
            <p>Outer island time: {{ now() }}</p>
            <button wire:click="$refresh">Outer island refresh</button>
            @island(mode: 'once')
                <div>
                    <p>Inner island time: {{ now() }}</p>
                    <button wire:click="$refresh">Inner island refresh</button>
                </div>
            @endisland
            <button wire:click="$refresh">Outer island refresh after</button>
        </div>
    @endisland
    <button wire:click="$refresh">Component refresh after</button>
</div>
