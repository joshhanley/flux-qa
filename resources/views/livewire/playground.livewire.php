<?php

use Livewire\Component;

new class extends Component {
    //
} ?>

<div>
    <flux:dropdown align="end">
        <flux:button icon="funnel" iconVariant="outline" size="sm">{{ __('Filters') }}</flux:button>

        <flux:popover>
            <div class="mx-3 mt-2 flex">
                <flux:text inline size="lg" variant="strong">{{ __('Filters') }}</flux:text>
                <flux:spacer/>
                <flux:button size="sm" inset variant="ghost">{{ __('Reset filters') }}</flux:button>
            </div>

            <div class="p-4 gap-4 grid grid-cols-2 w-lg">
                <flux:select label="Cliente" variant="listbox" clearable :placeholder="__('Select one')">
                    <flux:select.option>A</flux:select.option>
                    <flux:select.option>B</flux:select.option>
                    <flux:select.option>C</flux:select.option>
                </flux:select>

                <flux:select label="Autor" variant="listbox" clearable :placeholder="__('Select one')">
                    <flux:select.option>A</flux:select.option>
                    <flux:select.option>B</flux:select.option>
                    <flux:select.option>C</flux:select.option>
                </flux:select>

                <div class="col-span-2">
                    <flux:date-picker mode="range" week-numbers selectable-header>
                        <x-slot name="trigger">
                            <div class="grid grid-cols-2 gap-6 sm:gap-4">
                                <flux:date-picker.input :label="__('Start')" />
                                <flux:date-picker.input :label="__('End')" />
                            </div>
                        </x-slot>
                    </flux:date-picker>
                </div>
            </div>
        </flux:popover>
    </flux:dropdown>
</div>
