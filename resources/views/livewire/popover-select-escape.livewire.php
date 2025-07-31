<?php

use Livewire\Component;

new class extends Component {
    //
} ?>

<div>
    <flux:dropdown align="end">
        <flux:button icon="funnel" iconVariant="outline" size="sm">Filters</flux:button>

        <flux:popover>
            <flux:select variant="listbox" placeholder="Choose industry...">
                <flux:select.option>Photography</flux:select.option>
                <flux:select.option>Design services</flux:select.option>
                <flux:select.option>Web development</flux:select.option>
                <flux:select.option>Accounting</flux:select.option>
                <flux:select.option>Legal services</flux:select.option>
                <flux:select.option>Consulting</flux:select.option>
                <flux:select.option>Other</flux:select.option>
            </flux:select>

            <flux:date-picker />
        </flux:popover>
    </flux:dropdown>
</div>
