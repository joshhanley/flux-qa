<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new
// #[Layout('components.layouts.rtl')]
class extends Component {

}; ?>

<div>
<flux:tooltip>
    <flux:button variant="subtle" square>
        <flux:icon.check-circle />
    </flux:button>
    <flux:tooltip.content class="space-y-2">
        <flux:text class="text-xs" class="text-white/70">Title</flux:text>
        <flux:text variant="strong" class="text-white">Content</flux:text>
    </flux:tooltip.content>
</flux:tooltip>
</div>

