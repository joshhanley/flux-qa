<?php

use Livewire\Component;

new class extends Component {
    //
}; ?>

<div>
    <flux:link href="/playground2" wire:navigate.transition>Playground 2</flux:link>

    <div class="h-screen flex items-center justify-center">
        <div wire:transition="bob">Bob</div>
    </div>
</div>

<style global>
  ::view-transition-group(bob) {
    animation-duration: 500ms;
    animation-timing-function: ease;
  }
</style>