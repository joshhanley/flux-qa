<?php

use Livewire\Volt\Component;

new class extends Component {
    public $prepend = false;

    #[\Livewire\Attributes\Computed]
    public function numbers()
    {
        if ($this->prepend) {
            return [0, 1, 2];
        }

        //return [0, 1];
        //return [0, 2];
        return [1, 2];
    }
};
?>

<div>
    <button wire:click="$toggle('prepend')">Prepend</button>
    <div>
        @foreach ($this->numbers as $index => $number)
            <div wire:key="$number">
                <livewire:child :$number :key2="$number" />
            </div>
        @endforeach
    </div>
</div>