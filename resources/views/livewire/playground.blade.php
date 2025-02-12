<?php

use Livewire\Volt\Component;

new class extends Component {
    //
};
?>

<div>
    <flux:button variant="primary">Test</flux:button>
    <flux:badge color="lime">New</flux:badge>

    {{-- <div class="size-4 bg-accent"></div> --}}

    <flux:radio.group x-data variant="segmented" x-model="$flux.appearance">
        <flux:radio value="light" icon="sun">Light</flux:radio>
        <flux:radio value="dark" icon="moon">Dark</flux:radio>
        <flux:radio value="system" icon="computer-desktop">System</flux:radio>
    </flux:radio.group>

    <div class="h-screen"></div>
    <p>test</p>
    <textarea></textarea>
    <div class="dark dark:bg-zinc-800">
        <flux:button variant="primary">Dark Test</flux:button>
    </div>
</div>
