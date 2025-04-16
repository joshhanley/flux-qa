<?php

use Livewire\Volt\Component;

new class extends Component
{
    public $content = '';
};
?>

<div>
    <flux:editor wire:model.live="content" toolbar="heading | bold italic strike | bullet ordered blockquote | link | align | image" />
</div>
