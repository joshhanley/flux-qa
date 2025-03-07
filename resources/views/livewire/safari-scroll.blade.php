<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <div class="h-[500px]"></div>
    <flux:select variant="listbox" placeholder="Choose industry...">
        <flux:select.option>Photography</flux:select.option>
        <flux:select.option>Design services</flux:select.option>
        <flux:select.option>Web development</flux:select.option>
        <flux:select.option>Accounting</flux:select.option>
        <flux:select.option>Legal services</flux:select.option>
        <flux:select.option>Consulting</flux:select.option>
        <flux:select.option>Other</flux:select.option>
    </flux:select>
    <div class="h-[500px]"></div>
</div>
