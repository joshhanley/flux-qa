<?php

use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {};

?>

<div class="space-y-4">
    {{-- <flux:card>
        <flux:card.header class="border-b bg-gray-50">Use this page to test the following issues</flux:card.header>
        <flux:card.body class="divide-y">
            <div>
                <flux:heading size="lg">Card component doesn't allow full bleed header or body</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    If setting a background or border on the card header or some body contents, it would be nice to have the option to make it full bleed.
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. Just look at this card that these issues are in.<br />
                    2. The card header should be full width with a bottom border and background.<br>
                    3. The card body should also be full width to allow the `divide-y` class to work correctly.
                </flux:text>
            </div>

            <div>
                <flux:heading size="lg">Layout body with container not showing classes</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    If using body layout component with the `container` attribute, styles such as `space-y-4` are not applied. They are being applied to the wrapping element and not the container
                    element.
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. Just look at this page, the `flux:body` element has `space-y-4` applied but it's not being displayed.<br>
                    2. Remove `container` off `flux:body` element and see the styles are applied correctly.
                </flux:text>
            </div>
        </flux:card.body>
    </flux:card>

    <flux:card>
        <flux:card.header>Some content below</flux:card.header>
        <flux:card.body class="h-96">Below content so the page is longer than where the custom selects are.</flux:card.body>
    </flux:card> --}}
</div>
