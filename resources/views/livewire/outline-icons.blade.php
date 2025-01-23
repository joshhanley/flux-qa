<?php

use Livewire\Volt\Component;

new class extends Component
{
    public $test = false;
};
?>

<div>
    <input type="text" wire:model="test">
    <flux:navbar>
        <flux:button icon="home">Home</flux:button>
        <flux:button icon="home" icon-variant="outline">Home</flux:button>
        <flux:button icon="home" icon-variant="solid">Home</flux:button>
        <flux:button icon="home" icon-variant="mini">Home</flux:button>
        <flux:button icon="home" icon-variant="micro">Home</flux:button>
        <flux:navbar.item href="#" icon-dot icon="home">Home</flux:navbar.item>
        <flux:navbar.item href="#" icon="home"></flux:navbar.item>
        <flux:navbar.item href="#" icon="home" icon-variant="outline">Home</flux:navbar.item>
        <flux:navbar.item href="#" icon="home" icon-variant="solid">Home</flux:navbar.item>
        <flux:navbar.item href="#" icon="home" icon-variant="mini">Home</flux:navbar.item>
        <flux:navbar.item href="#" icon="home" icon-variant="micro">Home</flux:navbar.item>
        <flux:navbar.item href="#" icon="puzzle-piece">Features</flux:navbar.item>
        <flux:navbar.item href="#" icon="currency-dollar">Pricing</flux:navbar.item>
        <flux:navbar.item href="#" icon="user">About</flux:navbar.item>
    </flux:navbar>

    <flux:navlist class="w-64">
        <flux:navlist.item href="#" icon-dot icon="home">Home</flux:navlist.item>
        <flux:navlist.item href="#" icon="home" icon-variant="outline"></flux:navlist.item>
        <flux:navlist.item href="#" icon="home" icon-variant="outline">Home</flux:navlist.item>
        <flux:navlist.item href="#" icon="home" icon-variant="solid">Home</flux:navlist.item>
        <flux:navlist.item href="#" icon="home" icon-variant="mini">Home</flux:navlist.item>
        <flux:navlist.item href="#" icon="home" icon-variant="micro">Home</flux:navlist.item>
        <flux:navlist.item href="#" icon="puzzle-piece">Features</flux:navlist.item>
        <flux:navlist.item href="#" icon="currency-dollar">Pricing</flux:navlist.item>
        <flux:navlist.item href="#" icon="user">About</flux:navlist.item>
    </flux:navlist>

    <flux:radio.group wire:model="role" variant="segmented">
        <flux:radio label="Admin" icon="wrench" />
        <flux:radio label="Admin" icon="wrench" icon-variant="outline" />
        <flux:radio label="Editor" icon="pencil-square" />
        <flux:radio label="Viewer" icon="eye" />
    </flux:radio.group>

    <flux:radio.group label="Shipping" variant="cards" class="max-sm:flex-col">
        <flux:radio value="standard" icon="truck" label="Standard" description="4-10 business days" />
        <flux:radio value="standard" icon="truck" icon-variant="outline" label="Standard" description="4-10 business days" />
        <flux:radio value="fast" icon="cube" label="Fast" description="2-5 business days" />
        <flux:radio value="next-day" icon="clock" label="Next day" description="1 business day" />
    </flux:radio.group>

    <flux:tabs variant="segmented">
        <flux:tab icon="list-bullet" icon-variant="mini">List</flux:tab>
        <flux:tab icon="squares-2x2" icon-variant="outline">Board</flux:tab>
        <flux:tab icon="squares-2x2">Board</flux:tab>
        <flux:tab icon="calendar-days">Timeline</flux:tab>
    </flux:tabs>
</div>