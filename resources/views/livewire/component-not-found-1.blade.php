<?php

use Flux\Flux;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public $test = 1;

    public function change()
    {
        $this->test = $this->test + 1;

        $this->dispatch("whatever");
    }
}; ?>

<div>
    <button wire:click="change">change</button>

    <livewire:test-child :data="$test" :key="$test"/>
</div>