<?php

use Livewire\Component;

new class extends Component {
    public function save() {
        ray('save');
    }
} ?>

<div>
    <flux:button wire:click="save">Save</flux:button>
    <flux:button x-on:click="$wire.save">Alpine Save</flux:button>
</div>

<script>
    this.intercept('save', () => {
        console.log('save')
    })
</script>