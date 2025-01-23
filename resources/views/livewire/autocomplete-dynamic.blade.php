<?php

use Livewire\Volt\Component;

use App\Models\Document;

new class extends Component {
    public $show = false;
    public $state = 'Arkansas';
};
?>

<div>
    <flux:button wire:click="$toggle('show')">Toggle</flux:button>
    <div>
        @if ($show)
            <flux:autocomplete wire:model="state" label="State of residence">
                <flux:autocomplete.item>Alabama</flux:autocomplete.item>
                <flux:autocomplete.item>Arkansas</flux:autocomplete.item>
                <flux:autocomplete.item>California</flux:autocomplete.item>
                <!-- ... -->
            </flux:autocomplete>
        @endif
    </div>
</div>