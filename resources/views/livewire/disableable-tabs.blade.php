<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new class extends Component {
    public $enableTab2 = false;
}; ?>

<div>
    <flux:button wire:click="$set('enableTab2', true)">Enable Tab 2</flux:button>

    <flux:tab.group>
        <flux:tabs wire:model="tab">
            <flux:tab name="tab1">Tab 1</flux:tab>
            <flux:tab name="tab2" :disabled="!$enableTab2">Tab 2</flux:tab>
            <flux:tab name="tab3">Tab 3</flux:tab>
        </flux:tabs>

        <flux:tab.panel name="tab1">
            Tab 1 content
        </flux:tab.panel>

        <flux:tab.panel name="tab2">
            Tab 2 content
        </flux:tab.panel>

        <flux:tab.panel name="tab3">
            Tab 3 content
        </flux:tab.panel>
    </flux:tab.group>
</div>

