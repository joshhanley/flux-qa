<?php

use Livewire\Volt\Component;

new class extends Component {
    public function doSomething()
    {
        dump('Doing something...');
    }
};
?>

<div class="h-screen flex items-center justify-center space-x-4">
    <flux:tooltip content="Settings">
        <flux:button icon="cog-6-tooth" icon-variant="outline" />
    </flux:tooltip>

    <flux:tooltip content="Information1" toggleable>
        <flux:button icon="information-circle" icon-variant="outline" />
    </flux:tooltip>

    <flux:tooltip content="Information2" toggleable>
        <flux:button icon="information-circle" icon-variant="outline" />
    </flux:tooltip>

    <flux:button icon="cog-6-tooth" icon-variant="outline" tooltip="Settings" />

    <flux:button icon="information-circle" icon-variant="outline" tooltip="Information" toggleable />

    <flux:tooltip content="Settings" position="left">
        <flux:button icon="cog-6-tooth" icon-variant="outline" />
    </flux:tooltip>

    <flux:tooltip content="Settings" position="top">
        <flux:button icon="cog-6-tooth" icon-variant="outline" />
    </flux:tooltip>

    <flux:tooltip content="Settings" position="right">
        <flux:button icon="cog-6-tooth" icon-variant="outline" />
    </flux:tooltip>

    <flux:tooltip content="Settings" position="bottom">
        <flux:button icon="cog-6-tooth" icon-variant="outline" />
    </flux:tooltip>

    <flux:tooltip content="Information" position="left" toggleable>
        <flux:button icon="information-circle" icon-variant="outline" />
    </flux:tooltip>

    <flux:tooltip content="Information" position="top" toggleable>
        <flux:button icon="information-circle" icon-variant="outline" />
    </flux:tooltip>

    <flux:tooltip content="Information" position="right" toggleable>
        <flux:button icon="information-circle" icon-variant="outline" />
    </flux:tooltip>

    <flux:tooltip content="Information" position="bottom" toggleable>
        <flux:button icon="information-circle" icon-variant="outline" />
    </flux:tooltip>

    <flux:tooltip>
        <x-slot:content>
            <flux:heading size="lg" accent>Settings</flux:heading>
            <flux:subheading>This is a tooltip with custom content.</flux:subheading>

            <div class="flex justify-end mt-4">
                <flux:button>Do something!</flux:button>
            </div>

            <flux:link href="#">Or link to somewhere/ some docs</flux:link>
        </x-slot:content>

        <flux:button icon="cog-6-tooth" icon-variant="outline" />
    </flux:tooltip>

    <flux:tooltip toggleable>
        <x-slot:content>
            <flux:heading size="lg" accent>Information</flux:heading>
            <flux:subheading>This is a tooltip with custom content.</flux:subheading>

            <div class="flex justify-end mt-4">
                <flux:button>Do something!</flux:button>
            </div>

            <flux:link href="#">Or link to somewhere/ some docs</flux:link>
        </x-slot:content>

        <flux:button icon="information-circle" icon-variant="outline" />
    </flux:tooltip>

    <div x-data="{ show: false }">
        <flux:tooltip content="Some button details" toggleable>
            <flux:button x-on:click="show = !show">A button that has a toggleable tooltip on it</flux:button>
        </flux:tooltip>

        <div x-show="show">Some content showing</div>
    </div>
</div>
