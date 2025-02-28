<?php

use Livewire\Volt\Component;

new class extends Component {
    public $items = [
        'a' => 'a',
        'b' => 'b',
    ];

    public function prependItem()
    {
        $this->items = ['z' => 'z'] + $this->items;
    }

    public function appendItem()
    {
        $this->items['c'] = 'c';
    }

    public function removeFirstItem()
    {
        unset($this->items[array_key_first($this->items)]);
    }
};
?>

<div>
    <button wire:click="prependItem">Prepend Item</button>
    <button wire:click="appendItem">Append Item</button>

    <div>
        @foreach ($items as $key => $value)
            <div wire:key="{{ $key }}">
                <flux:editor />
                <flux:select variant="listbox" placeholder="Choose industry...">
                    <flux:select.option :value="$value . '-1'">Photography</flux:select.option>
                    <flux:select.option :value="$value . '-2'">Other</flux:select.option>
                </flux:select>
                <p>Value: {{ $value }}</p>
            </div>
        @endforeach
    </div>

    <flux:button wire:click="removeFirstItem">Remove First Item</flux:button>
</div>