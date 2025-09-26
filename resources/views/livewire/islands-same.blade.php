<?php

use Livewire\Component;

new class extends Component {
    public function save() {
        // ray('save');
    }

    public function other() {
        // ray('other');
    }
} ?>

<div>
    @island('bob')
        <p>Bob 1: {{ now() }}</p>
    @endisland

    @island('bob')
        <p>Bob 2: {{ now() }}</p>
        <button wire:click="$refresh">Refresh</button>
    @endisland
</div>
