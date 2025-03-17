<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new
#[Layout('components.layouts.rtl')]
class extends Component {
    //
}; ?>

<div>
    <flux:profile src="https://unavatar.io/x/calebporzio" />

    <flux:profile avatar="https://unavatar.io/x/calebporzio" />

    <flux:profile :chevron="false" avatar="https://unavatar.io/x/calebporzio" />

    <flux:profile circle :chevron="false" avatar="https://unavatar.io/x/calebporzio" />

    <flux:profile circle name="Caleb Porzio" avatar="https://unavatar.io/x/calebporzio" />

    <!-- Automatically generates initials from name -->
    <flux:profile name="Caleb Porzio" />

    <!-- Specify color... -->
    <flux:profile name="Caleb Porzio" avatar:color="cyan" />

    <!-- Manually specify initials... -->
    <flux:profile initials="CP" />

    <!-- Provide name only for avatar initial generation... -->
    <flux:profile avatar:name="Caleb Porzio" />

    <flux:profile
        icon:trailing="chevron-up-down"
        avatar="https://unavatar.io/x/calebporzio"
        name="Caleb Porzio"
    />

    <flux:dropdown align="end">
        <flux:profile avatar="https://unavatar.io/x/calebporzio" />

        <flux:navmenu class="max-w-[12rem]">
            <div class="px-2 py-1.5">
                <flux:subheading size="sm">Signed in as</flux:subheading>
                <flux:heading class="mt-1! truncate">caleb@example.com</flux:heading>
            </div>

            <flux:navmenu.separator />

            <div class="px-2 py-1.5">
                <flux:subheading size="sm" class="pl-7">Teams</flux:subheading>
            </div>

            <flux:navmenu.item href="#" icon="check" class="text-zinc-800 dark:text-white truncate">Personal</flux:navmenu.item>
            <flux:navmenu.item href="#" indent class="text-zinc-800 dark:text-white truncate">Wireable LLC</flux:navmenu.item>

            <flux:navmenu.separator />

            <flux:navmenu.item href="/dashboard" icon="key" class="text-zinc-800 dark:text-white">Licenses</flux:navmenu.item>
            <flux:navmenu.item href="/account" icon="user" class="text-zinc-800 dark:text-white">Account</flux:navmenu.item>

            <flux:navmenu.separator />

            <flux:navmenu.item href="/logout" icon="arrow-right-start-on-rectangle" class="text-zinc-800 dark:text-white">Logout</flux:navmenu.item>
        </flux:navmenu>
    </flux:dropdown>

    <flux:dropdown position="top" align="start">
        <flux:profile avatar="https://unavatar.io/x/calebporzio" name="Caleb Porzio" />

        <flux:menu>
            <flux:menu.radio.group>
                <flux:menu.radio checked>Caleb Porzio</flux:menu.radio>
                <flux:menu.radio>Hugo Sainte-Marie</flux:menu.radio>
                <flux:menu.radio>Josh Hanley</flux:menu.radio>
            </flux:menu.radio.group>

            <flux:menu.separator />

            <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
        </flux:menu>
    </flux:dropdown>
</div>