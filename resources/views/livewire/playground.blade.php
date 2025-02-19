<?php

use Livewire\Volt\Component;

new class extends Component {
    public string $content = 'foo <a href="https://example.com">bar</a> baz';
};
?>

<div>
    <flux:text>{{ $content }}</flux:text>
    <!-- Put cursor within word 'bar' and try to update the link. The url change will not applied in content -->
    <!-- Select full word 'bar' and try to update the link. The url change will be applied in content -->
    <flux:editor wire:model.live="content"/>
</div>