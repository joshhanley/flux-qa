<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new
#[Layout('components.layouts.rtl')]
class extends Component {
    //
}; ?>

<div>
    <flux:date-picker mode="range" value="2025-03-29/2025-04-08" with-presets with-confirmation week-numbers>
        <x-slot name="trigger">
            <flux:date-picker.input />
        </x-slot>
    </flux:date-picker>
    <input type="date" />
    {{-- <flux:date-picker /> --}}
</div>