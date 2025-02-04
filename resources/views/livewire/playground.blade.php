<?php

use Livewire\Volt\Component;

new class extends Component {
    //
};
?>

<div>
    <flux:button variant="primary">Test</flux:button>

    <div class="size-4 bg-accent"></div>

    <flux:radio.group x-data variant="segmented" x-model="$flux.appearance">
        <flux:radio value="light" icon="sun">Light</flux:radio>
        <flux:radio value="dark" icon="moon">Dark</flux:radio>
        <flux:radio value="system" icon="computer-desktop">System</flux:radio>
    </flux:radio.group>
</div>
