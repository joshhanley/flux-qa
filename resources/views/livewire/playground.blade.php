<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new
// #[Layout('components.layouts.rtl')]
class extends Component {
    //
}; ?>

<div>
    <flux:callout variant="secondary" icon="information-circle" heading="Your account has been successfully created." />
    <flux:callout variant="success" icon="check-circle" heading="Your account is verified and ready to use." />
    <flux:callout variant="warning" icon="exclamation-circle" heading="Please verify your account to unlock all features." />
    <flux:callout variant="danger" icon="x-circle" heading="Something went wrong. Try again or contact support." />

    
    <flux:profile src="https://unavatar.io/x/calebporzio" />
    {{-- <flux:date-picker mode="range" value="2025-03-29/2025-04-08" with-presets with-confirmation week-numbers>
        <x-slot name="trigger">
            <flux:date-picker.input />
        </x-slot>
    </flux:date-picker>
    <input type="date" /> --}}
    {{-- <flux:date-picker /> --}}
</div>