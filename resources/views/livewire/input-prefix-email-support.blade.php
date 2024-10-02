<?php

use Livewire\Volt\Component;

new class extends Component {};

?>

<flux:main>
<flux:input.group>
    {{-- <flux:input.group.prefix>https://</flux:input.group.prefix> --}}
    <flux:input placeholder="Post title" />
    {{-- <flux:button icon="plus">New post</flux:button> --}}
</flux:input.group>
</flux:main>
