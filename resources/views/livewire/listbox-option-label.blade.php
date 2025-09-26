<?php

use Livewire\Component;

new class extends Component {
    public $selected = "2";
}; ?>

<div>
    <div class="space-y-6">
        <p>Select should show The Contents, but display The Label when selected. </p>

        <p>Only shows The Label with standard variant:</p>

        <flux:text>Selected: {{ $selected }}</flux:text>

        <flux:select wire:model.live="selected" placeholder="Choose one">
            <flux:select.option value="1" label="First Label">First Contents</flux:select.option>
            <flux:select.option value="2" label="Second Label">Second Contents</flux:select.option>
        </flux:select>


        <p>Only shows The Contents with listbox variant:</p>

        <flux:select variant="listbox" wire:model.live="selected" placeholder="Choose one">
            <flux:select.option value="1" label="First Label">First Contents</flux:select.option>
            <flux:select.option value="2" label="Second Label">Second Contents</flux:select.option>
        </flux:select>
    </div>
</div>
