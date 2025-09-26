<?php

use Livewire\Component;

new class extends Component {
    //
} ?>

<div>
    <flux:checkbox label="Something" description="Some description that is kinda long" />
    <flux:field variant="inline">
        <flux:label>Email</flux:label>
        <flux:input wire:model="email" type="email" class="w-full" />
        <flux:description>Some really long description that should wrap around the input</flux:description>
        <flux:error message="Some really long error message that should wrap around the input" />
    </flux:field>

    <flux:field variant="inline">
        <flux:label>Date</flux:label>
        <flux:description>Some description that is kinda long</flux:description>
        <flux:date-picker wire:model="date" />
        <flux:error message="Some really long error message that should wrap around the input" />
    </flux:field>

    <flux:field>
        <flux:label>Email</flux:label>
        <flux:input wire:model="email" type="email" />
        <flux:error name="email" />
    </flux:field>
</div>
