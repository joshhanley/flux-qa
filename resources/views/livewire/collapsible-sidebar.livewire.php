<?php

new class {

} ?>

{{-- <div class="h-screen"> --}}
    <flux:header>Test</flux:header>
    {{-- <ui-sidebar
        state="expanded"
        collapsible="hidden"
        stashable
        stashed
        sticky
        x-data
        x-bind:style="{ position: 'sticky', top: $el.offsetTop + 'px', 'max-height': 'calc(100vh - ' + $el.offsetTop + 'px)' }"
        class="
        [grid-area:sidebar] bg-zinc-50 dark:bg-zinc-900 border-r rtl:border-r-0 rtl:border-l border-zinc-200 dark:border-zinc-700
        "
        data-flux-sidebar>
        <div class="h-full flex flex-col gap-4" data-flux-sidebar-content> --}}
            {{-- <flux:sidebar.toggle class="lg:hidden" icon="x-mark" /> --}}
        <flux:sidebar.collapsible sticky stashable collapsible="hidden" class="bg-zinc-50 dark:bg-zinc-900 border-r rtl:border-r-0 rtl:border-l border-zinc-200 dark:border-zinc-700">
            <flux:button
                icon="x-mark"
                class="shrink-0 lg:hidden"
                variant="subtle"
                square
                x-data
                x-on:click="document.querySelector('ui-sidebar').toggle()"
                {{-- x-on:click="document.body.hasAttribute('data-show-stashed-sidebar') ? document.body.removeAttribute('data-show-stashed-sidebar') : document.body.setAttribute('data-show-stashed-sidebar', '')" --}}
                data-flux-sidebar-toggle
                aria-label="{{ __('Toggle sidebar') }}"
            />
            <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="Acme Inc." class="px-2 dark:hidden" />
            <flux:brand href="#" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Acme Inc." class="px-2 hidden dark:flex" />
            <!-- <flux:input as="button" variant="filled" placeholder="Search..." icon="magnifying-glass" /> -->
            <flux:navlist variant="outline">
                <flux:navlist.item icon="home" href="#" current>Home</flux:navlist.item>
                <flux:navlist.item icon="inbox" badge="12" href="#">Inbox</flux:navlist.item>
                <flux:navlist.item icon="document-text" href="#" badge="12">Documents</flux:navlist.item>
                <flux:navlist.item icon="calendar" href="#" icon-trailing="calendar">Calendar</flux:navlist.item>
                <flux:navlist.group expandable icon="star" heading="Favorites" class="hidden lg:grid">
                    <flux:navlist.item href="#">Marketing site</flux:navlist.item>
                    <flux:navlist.item href="#">Android app</flux:navlist.item>
                    <flux:navlist.item href="#">Brand guidelines</flux:navlist.item>
                </flux:navlist.group>
                <flux:navlist.item icon="document-text" href="#">Documents</flux:navlist.item>
                <flux:navlist.item icon="calendar" href="#">Calendar</flux:navlist.item>
            </flux:navlist>
            <flux:spacer />
            <flux:navlist variant="outline">
                <flux:navlist.item icon="cog-6-tooth" href="#">Settings</flux:navlist.item>
                <flux:navlist.item icon="information-circle" href="#">Help</flux:navlist.item>
            </flux:navlist>
            <flux:dropdown position="top" align="start" class="max-lg:hidden">
                <flux:profile avatar="https://fluxui.dev/img/demo/user.png" name="Olivia Martin" />
                <flux:menu>
                    <flux:menu.radio.group>
                        <flux:menu.radio checked>Olivia Martin</flux:menu.radio>
                        <flux:menu.radio>Truly Delta</flux:menu.radio>
                    </flux:menu.radio.group>
                    <flux:menu.separator />
                    <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
                </flux:menu>
            </flux:dropdown>
    </flux:sidebar.collapsible>
        {{-- </div>
    </ui-sidebar> --}}

    <flux:main>
        <flux:button
            icon="bars-2"
            class="shrink-0"
            variant="subtle"
            square
            x-data
            x-on:click="document.querySelector('ui-sidebar').toggle()"
            {{-- x-on:click="document.body.hasAttribute('data-show-stashed-sidebar') ? document.body.removeAttribute('data-show-stashed-sidebar') : document.body.setAttribute('data-show-stashed-sidebar', '')" --}}
            data-flux-sidebar-toggle
            aria-label="{{ __('Toggle sidebar') }}"
        />

        <div>Header</div>
        <flux:button wire:click="$refresh">Refresh</flux:button>
        <div class="h-[2000px]">
            Some really long content here.
        </div>
        <div>Footer</div>
    </flux:main>
{{-- </div> --}}
