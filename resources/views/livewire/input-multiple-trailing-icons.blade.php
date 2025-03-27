<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new
// #[Layout('components.layouts.rtl')]
class extends Component {
    public $licence = 'FLUX-1234-5678-ABCD-EFGH';

    public $search;
    public $foo;

    public function updated()
    {
        sleep(2);
    }

    public function submit()
    {
        sleep(2);
    }
}; ?>

<div class="max-w-96">
    <form wire:submit="submit">
        <flux:input as="button">Should there be a loading indicator for this button?</flux:input>
        <flux:input label="No loading indicator ever" wire:model="search" />
        <flux:input label="Loading indicator when request is out" wire:model.live="search" />
        <flux:input label="No loading indicator ever" wire:model.live="search" :loading="false" />
        <flux:input label="Always show loading indicator" loading />
        <flux:input label="No loading indicator as no wire:model" />
        <flux:input label="Show loading indicator when a request is out for the foo property (wire:loading + wire:target type deal)" loading="foo" />
        <flux:input wire:model="foo" />


        <flux:input label="Keyboard Shortcut" loading kbd="⌘K" />
        <flux:input label="Icon Trailing" loading icon-trailing="credit-card" />
        <flux:input label="Expandable" loading expandable />
        <flux:input label="Clearable" loading clearable />
        <flux:input label="Copyable" loading copyable />
        <flux:input label="Viewable" loading viewable />

        <flux:button type="submit">Submit</flux:button>

        <flux:icon name="loading" wire:loading wire:target="search" class="mt-4" />
    </form>

    <flux:input icon="key" type="password" value="FLUX-1234-5678-ABCD-EFGH" wire:model.live="licence" kbd="⌘K" />
    <flux:input icon="key" type="password" value="FLUX-1234-5678-ABCD-EFGH" wire:model.live="licence" copyable />
    <flux:input icon="key" type="password" value="FLUX-1234-5678-ABCD-EFGH" wire:model.live="licence" kbd="⌘K" copyable />
    <flux:input icon="key" type="password" value="FLUX-1234-5678-ABCD-EFGH" wire:model.live="licence" kbd="⌘K" copyable viewable />
    <flux:input icon="key" type="password" value="FLUX-1234-5678-ABCD-EFGH" wire:model.live="licence" kbd="⌘K" copyable viewable icon-trailing="credit-card" />
    <flux:input icon="key" type="password" value="FLUX-1234-5678-ABCD-EFGH" wire:model.live="licence" kbd="⌘K" clearable copyable viewable icon-trailing="credit-card" />
    {{-- <flux:input icon="key" type="password" value="FLUX-1234-5678-ABCD-EFGH" kbd="⌘K" expandable clearable copyable viewable wire:model.live="licence" icon-trailing="credit-card" /> --}}
    
</div>

