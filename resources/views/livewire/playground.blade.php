<?php

use Livewire\Volt\Component;

new class extends Component {
    //
};
?>

<div class="mt-4 space-y-4">
    <flux:button inset>Button with inset</flux:button>
    <flux:button inset href="#">Button with inset and href</flux:button>
    {{-- <flux:button>Test</flux:button>
    <flux:button href="/">Test</flux:button> --}}

    <div class="flex">
        Some content

        <flux:button size="sm" icon="x-mark" variant="ghost" class="!inline-flex" inset />

        End content - Button Inline Flex
    </div>

    <div class="flex">
        Some content

        <flux:button size="sm" icon="x-mark" variant="ghost" class="!flex" inset />
        End content - Button Flex
    </div>

    <div class="flex">
        Some content

        <flux:button href="#" size="sm" icon="x-mark" variant="ghost" class="!inline-flex" inset />

        End content - Link Inline Flex
    </div>

    <div class="flex">
        Some content

        <flux:button href="#" size="sm" icon="x-mark" variant="ghost" class="!flex" inset />
        End content - Link Flex
    </div>

    {{-- <div style="background: lightblue; display: flex; margin-top: -10px;">A</div>
    <div style="background: lightcoral;">B</div> --}}
</div>
