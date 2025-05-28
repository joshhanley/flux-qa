<?php

use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Volt\Component;

new class extends Component {
    public $data;

    #[On('whatever')]
    public function triggeredEvent() {
        //
    }
}; ?>

<div>
    <p>Child : {{ $data }} <br/>ID: {{ $this->__id }}</p>

    <livewire:test2-child :data="$data" :key="$data"/>
</div>
