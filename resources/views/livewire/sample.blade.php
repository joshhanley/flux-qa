<?php

use Livewire\Attributes\Lazy;
use Livewire\Volt\Component;

new
#[Lazy]
class extends Component {
    public string $tab = 'two';
}; ?>

<div>
    <flux:tab.group>
        <flux:tabs wire:model="tab">
            <flux:tab name="one">One</flux:tab>
            <flux:tab name="two">Two</flux:tab>
        </flux:tabs>
        <flux:tab.panel name="one">One</flux:tab.panel>
        <flux:tab.panel name="two">Two</flux:tab.panel>
    </flux:tab.group>
</div>

