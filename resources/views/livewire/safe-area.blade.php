<?php

use App\Models\User;
use Flux\Flux;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    //
};
?>

<div class="flex">
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

    <style>
        [data-safe-area] {
            background-color: red;
        }
    </style>
</div>
