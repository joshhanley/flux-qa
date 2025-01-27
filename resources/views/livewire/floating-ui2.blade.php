<?php

use Livewire\Volt\Component;

new class extends Component {
    public $open = false;
    public $open2 = true;
    public $state;
};
?>

<div wire1:poll.5s>
    <div class="h-[1500px]"></div>
    <div>{{ now() }}</div>
    <button type="button" wire:click="$refresh">Refresh</button>
    <flux:tooltip position="bottom" toggleable>
        <flux:button icon="cog-6-tooth" icon-variant="outline" />
        <flux:tooltip.content>
            Some content<br/>
            Some content<br/>
            Some content<br/>
            Some content<br/>
            Some content<br/>
            Some content<br/>
            Some content<br/>
            Some content<br/>
        </flux:tooltip.content>
    </flux:tooltip>
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
        </flux:menu>
    </flux:dropdown>
    <flux:context>
        <flux:card class="border-dashed border-2 px-16">
            <flux:subheading>Right click</flux:subheading>
        </flux:card>

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
        </flux:menu>
    </flux:context>
    <flux:select variant="listbox" placeholder="Choose industry...">
        <flux:option>Photography</flux:option>
        <flux:option>Design services</flux:option>
        <flux:option>Web development</flux:option>
        <flux:option>Accounting</flux:option>
        <flux:option>Legal services</flux:option>
        <flux:option>Consulting</flux:option>
        <flux:option>Other</flux:option>
    </flux:select>

    <flux:dropdown wire:model="open">
        <flux:button icon-trailing="chevron-down">Options</flux:button>

        <flux:menu>
            <flux:menu.item icon="plus">New post with long stuff</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
        </flux:menu>
    </flux:dropdown>

    <div class="h-[500px]"></div>
</div>
