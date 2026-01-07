<?php

use Livewire\Attributes\Url;
use Livewire\Component;

new class extends Component {
    //
}; ?>

<div>
    <flux:select 
        variant="listbox" 
        placeholder="Choose industry..."
        name="industry"
    >
        <flux:select.option value="1">Photography</flux:select.option>
        <flux:select.option value="2">Design services</flux:select.option>
        <flux:select.option value="3" selected>Web development</flux:select.option>
        <flux:select.option value="4">Accounting</flux:select.option>
        <flux:select.option value="5">Legal services</flux:select.option>
        <flux:select.option value="6">Consulting</flux:select.option>
        <flux:select.option value="7">Other</flux:select.option>
    </flux:select>
</div>