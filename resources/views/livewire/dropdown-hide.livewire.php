<?php

use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    public $visible = true;
}; ?>

<div>
    @if ($visible)
        <flux:dropdown>
            <flux:button>Open</flux:button>
            <flux:menu keep-open>
                <flux:menu.item wire:click="$toggle('visible')">Hide</flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    @endif

    <flux:input placeholder="You cannot select this field after hiding above menu." />
</div>
