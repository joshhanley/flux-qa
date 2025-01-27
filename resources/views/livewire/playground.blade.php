<?php

use Livewire\Volt\Component;

new class extends Component {
    public $state;
    public $industry;
};
?>

<div>
    <flux:text>State: {{ $state }}</flux:text>
    <flux:autocomplete wire:model.live="state" label="State of residence">
        <flux:autocomplete.item value="al">Alabama</flux:autocomplete.item>
        <flux:autocomplete.item value="ar">Arkansas</flux:autocomplete.item>
        <flux:autocomplete.item value="ca">California</flux:autocomplete.item>
        <!-- ... -->
    </flux:autocomplete>

    <flux:text>Industry: {{ $industry }}</flux:text>
    <flux:select wire:model.live="industry" variant="combobox" placeholder="Choose industry...">
        <flux:option value="ph">Photography</flux:option>
        <flux:option value="de">Design services</flux:option>
        <flux:option value="we">Web development</flux:option>
        <flux:option value="ac">Accounting</flux:option>
        <flux:option value="le">Legal services</flux:option>
        <flux:option value="co">Consulting</flux:option>
        <flux:option value="ot">Other</flux:option>
    </flux:select>
</div>
