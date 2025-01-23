<?php

use Livewire\Volt\Component;

new class extends Component {
    //
};
?>

<div>
    <flux:radio.group label="Shipping" variant="cards" class="max-sm:flex-col">
        <flux:radio value="standard" icon="truck" label="Standard" description="4-10 business days" />
        <flux:radio value="fast" icon="cube" label="Fast" description="2-5 business days" />
        <flux:radio value="next-day" icon="clock" label="Next day" description="1 business day" />
    </flux:radio.group>

    <flux:radio.group label="Shipping" variant="cards" class="max-sm:flex-col">
        <flux:radio value="standard" icon="truck" icon-variant="outline" label="Standard" description="4-10 business days" />
        <flux:radio value="fast" icon="cube" icon-variant="outline" label="Fast" description="2-5 business days" />
        <flux:radio value="next-day" icon="clock" icon-variant="outline" label="Next day" description="1 business day" />
    </flux:radio.group>

    <flux:input icon="magnifying-glass" placeholder="Search orders" icon-trailing="credit-card" />
    <flux:input icon="magnifying-glass" placeholder="Search orders" icon-trailing="credit-card" icon-variant="outline" />

    <br/>
    <flux:badge icon="user-circle" icon-trailing="home">Users</flux:badge>
    <flux:badge icon="user-circle"></flux:badge>
    <flux:badge icon="user-circle" icon-trailing="home" size="sm" icon-variant="outline">Users</flux:badge>
    <flux:badge icon="user-circle" icon-trailing="home" icon-variant="outline">Users</flux:badge>
    <flux:badge icon="user-circle" icon-trailing="home" size="lg" icon-variant="outline">Users</flux:badge>

    <flux:tabs variant="segmented">
        <flux:tab icon="list-bullet">List</flux:tab>
        <flux:tab icon="squares-2x2">Board</flux:tab>
        <flux:tab icon="calendar-days">Timeline</flux:tab>
    </flux:tabs>

    <flux:breadcrumbs>
        <flux:breadcrumbs.item href="#" icon="home" />
        <flux:breadcrumbs.item href="#">Blog</flux:breadcrumbs.item>
        <flux:breadcrumbs.item>Post</flux:breadcrumbs.item>
    </flux:breadcrumbs>

    <flux:breadcrumbs>
        <flux:breadcrumbs.item href="#" icon="home" icon-variant="outline" />
        <flux:breadcrumbs.item href="#" icon-variant="outline">Blog</flux:breadcrumbs.item>
        <flux:breadcrumbs.item icon-variant="outline">Post</flux:breadcrumbs.item>
    </flux:breadcrumbs>

    <flux:checkbox.group label="Subscription preferences" variant="cards" class="flex-col">
        <flux:checkbox checked
            value="newsletter"
            icon="newspaper"
            label="Newsletter"
            description="Get the latest updates and offers."
        />
        <flux:checkbox
            value="updates"
            icon="cube"
            label="Product updates"
            description="Learn about new features and products."
        />
        <flux:checkbox
            value="invitations"
            icon="calendar"
            label="Event invitations"
            description="Invitatations to exclusive events."
        />
    </flux:checkbox.group>

    <flux:checkbox.group label="Subscription preferences" variant="cards" class="flex-col">
        <flux:checkbox checked
            value="newsletter"
            icon="newspaper"
            icon-variant="outline"
            label="Newsletter"
            description="Get the latest updates and offers."
        />
        <flux:checkbox
            value="updates"
            icon="cube"
            icon-variant="outline"
            label="Product updates"
            description="Learn about new features and products."
        />
        <flux:checkbox
            value="invitations"
            icon="calendar"
            icon-variant="outline"
            label="Event invitations"
            description="Invitatations to exclusive events."
        />
    </flux:checkbox.group>

    <flux:command>
        <flux:command.input placeholder="Search..." />

        <flux:command.items>
            <flux:command.item wire:click="..." icon="user-plus" kbd="⌘A">Assign to…</flux:command.item>
            <flux:command.item wire:click="..." icon="user-plus" icon-variant="solid" kbd="⌘A">Assign to…</flux:command.item>
            <flux:command.item wire:click="..." icon="document-plus">Create new file</flux:command.item>
            <flux:command.item wire:click="..." icon="folder-plus" kbd="⌘⇧N">Create new project</flux:command.item>
            <flux:command.item wire:click="..." icon="book-open">Documentation</flux:command.item>
            <flux:command.item wire:click="..." icon="newspaper">Changelog</flux:command.item>
            <flux:command.item wire:click="..." icon="cog-6-tooth" kbd="⌘,">Settings</flux:command.item>
        </flux:command.items>
    </flux:command>

    <flux:dropdown>
        <flux:button icon-trailing="chevron-down">Options</flux:button>

        <flux:menu>
            <flux:menu.item icon="plus">New post</flux:menu.item>

            <flux:menu.separator />

            <flux:menu.submenu heading="Sort by">
                <flux:menu.radio.group>
                    <flux:menu.radio checked>Name</flux:menu.radio>
                    <flux:menu.radio>Date</flux:menu.radio>
                    <flux:menu.radio>Popularity</flux:menu.radio>
                </flux:menu.radio.group>
            </flux:menu.submenu>

            <flux:menu.submenu heading="Filter">
                <flux:menu.checkbox checked>Draft</flux:menu.checkbox>
                <flux:menu.checkbox checked>Published</flux:menu.checkbox>
                <flux:menu.checkbox>Archived</flux:menu.checkbox>
            </flux:menu.submenu>

            <flux:menu.separator />

            <flux:menu.item variant="danger" icon="trash">Delete</flux:menu.item>
            <flux:menu.item variant="danger" icon="trash" icon-variant="outline">Delete</flux:menu.item>
        </flux:menu>
    </flux:dropdown>

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
</div>
