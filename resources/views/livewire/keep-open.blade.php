<?php

use Livewire\Volt\Component;

new class extends Component {
    public $keepOpen = false;
}; ?>

<div>
    <flux:dropdown>
        <flux:button icon:trailing="chevron-down">Options</flux:button>

        <flux:menu>
            <flux:menu.item icon="plus" keep-open>New post</flux:menu.item>

            <flux:menu.separator />

            <flux:menu.submenu heading="Sort by">
                <flux:menu.radio.group keep-open>
                    <flux:menu.radio checked>Name</flux:menu.radio>
                    <flux:menu.radio>Date</flux:menu.radio>
                    <flux:menu.radio>Popularity</flux:menu.radio>
                </flux:menu.radio.group>
            </flux:menu.submenu>

            <flux:menu.submenu heading="Filter">
                <flux:menu.checkbox keep-open checked>Draft</flux:menu.checkbox>
                <flux:menu.checkbox keep-open checked>Published</flux:menu.checkbox>
                <flux:menu.checkbox keep-open>Archived</flux:menu.checkbox>
            </flux:menu.submenu>

            <flux:menu.separator />

            <flux:menu.item variant="danger" icon="trash">Delete</flux:menu.item>
        </flux:menu>
    </flux:dropdown>
</div>
