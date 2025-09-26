<?php

use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    public $show = true;

    public function remove()
    {
        //$this->show = false;
    }
}; ?>

<div>
    <button type="button" wire:click="remove" class="border rounded">Refresh</button>
    @if ($show)
        <livewire:child />
    @endif
</div>

