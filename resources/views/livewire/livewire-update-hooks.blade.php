<?php

use Livewire\Attributes\Url;
use Livewire\Component;

new class extends Component {
    public $updates = [];

    public array $items = [['one', 'other'], 'two', 'three', 'four'];

    public function updating($name, $value)
    {
        ray("updating($name, $value)");
    }

    public function updated($name, $value)
    {
        ray("updated($name, $value)");
    }

    public function updatingItems($value, $key)
    {
        ray("updatingItems($value, $key)");
    }

    public function updatedItems($value, $key)
    {
        ray("updatedItems($value, $key)");
        $this->updates[] = [
            'key' => $key,
            'value' => $value,
        ];
    }

    public function updatingItems0($value, $key)
    {
        ray("updatingItems0($value, $key)");
    }

    public function updatedItems0($value, $key)
    {
        ray("updatedItems0($value, $key)");
    }

    public function updatingItems1($value, $key)
    {
        ray("updatingItems1($value, $key)");
    }

    public function updatedItems1($value, $key)
    {
        ray("updatedItems1($value, $key)");
    }

    public function updatingItems2($value, $key)
    {
        ray("updatingItems2($value, $key)");
    }

    public function updatedItems2($value, $key)
    {
        ray("updatedItems2($value, $key)");
    }

    public function updatingItems3($value, $key)
    {
        ray("updatingItems3($value, $key)");
    }

    public function updatedItems3($value, $key)
    {
        ray("updatedItems3($value, $key)");
    }

}; ?>

<div>
    <div>Items: <span dusk="items">{{ var_export($items) }}</span></div>
    <div>
        <p>Updates:</p>

        <ul>
            @foreach ($updates as $update)
                <li class="ml-6 list-disc">{{ $update['key'] }}: {{ json_encode($update['value']) }}</li>
            @endforeach
        </ul>
    </div>

    <div x-data="{ values: [] }" x-modelable="values" wire:model.live="items">
        <input type="text" wire:model.live="items.1" dusk="input">
        <input type="text" wire:model.live="items.0.0" dusk="input">
        <button x-on:click="values = ['two', 'three']" dusk="changeArray">Change array</button>
    </div>
</div>