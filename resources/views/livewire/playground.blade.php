<?php

use Livewire\Volt\Component;

new class extends Component {
    public $content;
};
?>

<div>
    <flux:dropdown>
        <flux:button icon-trailing="chevron-down">Options</flux:button>

        <flux:menu>
            <flux:menu.submenu heading="Sort by">
                <flux:menu.radio checked>Name</flux:menu.radio>
                <flux:menu.radio>Date</flux:menu.radio>
                <flux:menu.radio>Popularity</flux:menu.radio>
            </flux:menu.submenu>

            <flux:menu.submenu heading="Filter">
                <flux:menu.checkbox checked>Draft</flux:menu.checkbox>
                <flux:menu.checkbox checked>Published</flux:menu.checkbox>
                <flux:menu.checkbox>Archived</flux:menu.checkbox>
            </flux:menu.submenu>

            <flux:menu.separator />

            <flux:menu.item variant="danger">Delete</flux:menu.item>
        </flux:menu>
    </flux:dropdown>
    {{-- <flux:select variant="listbox" multiple>
        @foreach(range('A', 'Z') as $value)               
            <flux:option value="{{ $value }}">{{ $value }}</flux:option>
        @endforeach

    </flux:select> --}}
    {{-- <flux:header container class="bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">

        <flux:navbar class="-mb-px max-lg:hidden">
            <flux:navbar.item icon="home" href="#" current>Home</flux:navbar.item>
        </flux:navbar>

        <flux:spacer />

        <flux:dropdown position="top" align="start">
            <flux:profile name="Caleb" />
            <flux:profile icon-variant="outline" icon-trailing="home" avatar="https://fluxui.dev/img/demo/user.png" />
            <flux:profile avatar="https://fluxui.dev/img/demo/user.png">
                <x-slot:icon-trailing>
                    Z
                </x-slot:icon-trailing>
            </flux:profile>

            <flux:menu>
                <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
            </flux:menu>
        </flux:dropdown>
        <flux:dropdown position="top" align="start">
            <flux:profile name="Caleb Porzio" avatar="https://fluxui.dev/img/demo/user.png" />
            <flux:profile icon-variant="outline" icon-trailing="home" avatar="https://fluxui.dev/img/demo/user.png" />
            <flux:profile avatar="https://fluxui.dev/img/demo/user.png">
                <x-slot:icon-trailing>
                    Z
                </x-slot:icon-trailing>
            </flux:profile>

            <flux:menu>
                <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    </flux:header>
    <flux:navbar>
        <flux:navbar.item href="#">Dashboard</flux:navbar.item>
        <flux:navbar.item href="#">Transactions</flux:navbar.item>

        <flux:dropdown>
            <flux:navbar.item icon-trailing="chevron-down">Account</flux:navbar.item>

            <flux:navmenu>
                <flux:navmenu.item href="#" icon="user" icon-variant="outline" icon-trailing="home">Profile</flux:navmenu.item>
                <flux:navmenu.item href="#" icon="user" icon-trailing="home">Profile</flux:navmenu.item>
                <flux:navmenu.item href="#">
                    <x-slot:icon>O</x-slot:icon>
                    <x-slot:icon-trailing>Z</x-slot:icon-trailing>
                    Profile
                </flux:navmenu.item>
                <flux:navmenu.item href="#">Settings</flux:navmenu.item>
                <flux:navmenu.item href="#">Billing</flux:navmenu.item>
            </flux:navmenu>
        </flux:dropdown>
    </flux:navbar>
    <flux:dropdown>
        <flux:button icon-trailing="chevron-down">Options</flux:button>

        <flux:menu>
            <flux:menu.submenu heading="Sort by">
                <flux:menu.radio.group>
                    <flux:menu.radio checked icon-variant="outline" icon-trailing="home">Name</flux:menu.radio>
                    <flux:menu.radio checked icon-variant="mini" icon-trailing="home">Name</flux:menu.radio>
                    <flux:menu.radio>Date</flux:menu.radio>
                    <flux:menu.radio>Popularity</flux:menu.radio>
                </flux:menu.radio.group>
            </flux:menu.submenu>

            <flux:menu.submenu heading="Filter">
                <flux:menu.checkbox checked icon-variant="outline" icon-trailing="home">Draft</flux:menu.checkbox>
                <flux:menu.checkbox checked icon-variant="mini" icon-trailing="home">Draft</flux:menu.checkbox>
                <flux:menu.checkbox checked>Published</flux:menu.checkbox>
                <flux:menu.checkbox>Archived</flux:menu.checkbox>
            </flux:menu.submenu>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus" icon-trailing="home">
                <x-slot:icon>
                    <flux:icon.plus variant="mini" class="mr-2" />
                </x-slot:icon>
                New post
            </flux:menu.item>
            <flux:menu.submenu heading="Sort by" icon="home" icon-variant="outline" icon-trailing="home">
                <x-slot:icon-trailing>
                    <flux:icon.home variant="mini" class="ml-auto" />
                </x-slot:icon-trailing>
                <flux:menu.item icon="plus">New post</flux:menu.item>
                <flux:menu.item icon="plus">
                    <x-slot:icon>
                        <flux:icon.home variant="mini" class="mr-2" />
                    </x-slot:icon>
                    New post
                </flux:menu.item>
            </flux:menu.submenu>
            <flux:menu.submenu heading="Sort by">
                <x-slot:icon>
                    <flux:icon.home variant="mini" class="mr-2" />
                </x-slot:icon>
                <flux:menu.item icon="plus">New post</flux:menu.item>
                <flux:menu.item icon="plus">
                    <x-slot:icon>
                        <flux:icon.home variant="mini" class="mr-2" />
                    </x-slot:icon>
                    New post
                </flux:menu.item>
            </flux:menu.submenu>

            <flux:menu.item variant="danger" icon="trash">Delete</flux:menu.item>
        </flux:menu>
    </flux:dropdown>
    
    <flux:tab.group>
        <flux:tabs>
            <flux:tab name="profile" icon="user">Profile</flux:tab>
            <flux:tab name="profile" icon="user">
                <x-slot:icon>
                    O
                </x-slot:icon>
                <x-slot:icon-trailing>
                    Z
                </x-slot:icon-trailing>
                Profile
            </flux:tab>
            <flux:tab name="account" icon="cog-6-tooth">Account</flux:tab>
            <flux:tab name="billing" icon="banknotes">Billing</flux:tab>
        </flux:tabs>
    </flux:tab.group>
    <flux:radio.group wire:model="role" variant="segmented">
        <flux:radio label="Admin" icon="wrench" />
        <flux:radio label="Admin" icon="wrench">
            <x-slot:icon>
                O
            </x-slot:icon>
            <x-slot:icon-trailing>
                Z
            </x-slot:icon-trailing>
        </flux:radio>
        <flux:radio label="Editor" icon="pencil-square" />
        <flux:radio label="Viewer" icon="eye" />
    </flux:radio.group>
    <flux:radio.group label="Shipping" variant="cards" class="max-sm:flex-col">
        <flux:radio value="standard" icon="truck" label="Standard" description="4-10 business days" />
        <flux:radio value="standard" icon="truck" label="Standard" description="4-10 business days">
            <x-slot:icon>
                O
            </x-slot:icon>
        </flux:radio>
        <flux:radio value="fast" icon="cube" label="Fast" description="2-5 business days" />
        <flux:radio value="next-day" icon="clock" label="Next day" description="1 business day" />
    </flux:radio.group>
    <flux:navbar>
        <flux:navlist class="w-64">
            <flux:navlist.item href="#" icon="home">Home</flux:navlist.item>
            <flux:navlist.item href="#" icon="home">
                <x-slot:icon>
                    O
                </x-slot:icon>

                <x-slot:icon-trailing>
                    Z
                </x-slot:icon-trailing>
                Home
            </flux:navlist.item>
            <flux:navlist.item href="#" icon="puzzle-piece">Features</flux:navlist.item>
            <flux:navlist.item href="#" icon="currency-dollar">Pricing</flux:navlist.item>
            <flux:navlist.item href="#" icon="user">About</flux:navlist.item>
        </flux:navlist>
        <flux:navbar.item href="#" icon="home">Home</flux:navbar.item>
        <flux:navbar.item href="#" icon="home">
            <x-slot:icon>
                O
            </x-slot:icon>

            <x-slot:icon-trailing>
                Z
            </x-slot:icon-trailing>
            Home
        </flux:navbar.item>
        <flux:navbar.item href="#" icon="puzzle-piece">Features</flux:navbar.item>
        <flux:navbar.item href="#" icon="currency-dollar">Pricing</flux:navbar.item>
        <flux:navbar.item href="#" icon="user">About</flux:navbar.item>
    </flux:navbar>
    <flux:editor>
        <flux:editor.toolbar>
            <flux:editor.heading />
            <flux:editor.separator />
            <flux:editor.bold />
            <flux:editor.italic />
            <flux:editor.strike />
            <flux:editor.separator />
            <flux:editor.bullet />
            <flux:editor.ordered />
            <flux:editor.blockquote />
            <flux:editor.separator />
            <flux:editor.link />
            <flux:editor.separator />
            <flux:editor.align />

            <flux:editor.spacer />

            <flux:dropdown position="bottom end" offset="-15">
                <flux:editor.button icon="ellipsis-horizontal" tooltip="More" />

                <flux:menu>
                    <flux:menu.item wire:click="…" icon="arrow-top-right-on-square">Preview</flux:menu.item>
                    <flux:menu.item wire:click="…" icon="arrow-down-tray">Export</flux:menu.item>
                    <flux:menu.item wire:click="…" icon="share">Share</flux:menu.item>
                </flux:menu>
            </flux:dropdown>
        </flux:editor.toolbar>

        <flux:editor.content />
    </flux:editor>
    <flux:command>
        <flux:command.input placeholder="Search..." />
        <flux:command.input placeholder="Search...">
            <x-slot:icon>
                O
            </x-slot:icon>
        </flux:command.input>

        <flux:command.items>
            <flux:command.item wire:click="..." icon="user-plus" kbd="⌘A">Assign to…</flux:command.item>
            <flux:command.item wire:click="..." icon="user-plus" kbd="⌘A">
                <x-slot:icon>
                    O
                </x-slot:icon>
                Assign to…
            </flux:command.item>
            <flux:command.item wire:click="..." icon="document-plus">Create new file</flux:command.item>
            <flux:command.item wire:click="..." icon="folder-plus" kbd="⌘⇧N">Create new project</flux:command.item>
            <flux:command.item wire:click="..." icon="book-open">Documentation</flux:command.item>
            <flux:command.item wire:click="..." icon="newspaper">Changelog</flux:command.item>
            <flux:command.item wire:click="..." icon="cog-6-tooth" kbd="⌘,">Settings</flux:command.item>
        </flux:command.items>
    </flux:command>
    <flux:checkbox.group label="Subscription preferences" variant="cards" class="flex-col">
        <flux:checkbox checked
            value="newsletter"
            icon="newspaper"
            label="Newsletter"
            description="Get the latest updates and offers." />
        <flux:checkbox checked
            value="newsletter"
            label="Newsletter"
            description="Get the latest updates and offers.">
            <x-slot:icon>
                O
            </x-slot:icon>
        </flux:checkbox>
        <flux:checkbox
            value="updates"
            icon="cube"
            label="Product updates"
            description="Learn about new features and products." />
        <flux:checkbox
            value="invitations"
            icon="calendar"
            label="Event invitations"
            description="Invitatations to exclusive events." />
    </flux:checkbox.group>
    <flux:badge>
        Admin
        <flux:badge.close />
    </flux:badge>
    <flux:badge>
        Admin
        <flux:badge.close icon-variant="outline" />
    </flux:badge>
    <flux:badge>
        Admin <flux:badge.close icon-variant="outline">
            <x-slot:icon>
                O
            </x-slot:icon>
        </flux:badge.close>
    </flux:badge>

    <flux:badge icon="user-circle">Users</flux:badge>
    <flux:badge icon="user-circle">
        <x-slot:icon>
            O
        </x-slot:icon>
        Users
    </flux:badge> --}}
</div>
