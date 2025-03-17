<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new
// #[Layout('components.layouts.rtl')]
class extends Component {
    //
}; ?>

<div>
    <flux:profile avatar="https://unavatar.io/x/calebporzio" />

    <flux:profile name="Caleb Porzio" avatar="https://unavatar.io/x/calebporzio" />

    <flux:profile :chevron="false" avatar="https://unavatar.io/x/calebporzio" />
</div>