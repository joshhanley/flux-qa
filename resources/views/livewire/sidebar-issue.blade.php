<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new
#[Layout('components.layouts.sidebar-issue')]
class extends Component {
    //
};
?>

<div>
    <flux:sidebar.toggle icon="bars-3" class="mr-3" />
    <flux:sidebar stashable sticky class="border-r bg-zinc-50 dark:bg-zinc-900 border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.toggle icon="x-mark" />

        <flux:brand href="/" logo="https://fluxui.dev/img/demo/logo.png" name="Acme Inc." class="px-2 dark:hidden" />
        <flux:brand href="/" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Acme Inc."
            class="hidden px-2 dark:flex" />

        <flux:navlist variant="outline">
            <flux:navlist.item icon="home" href="/">Home</flux:navlist.item>
        </flux:navlist>
    </flux:sidebar>
</div>
