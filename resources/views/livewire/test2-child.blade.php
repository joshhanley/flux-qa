<?php

use App\Models\User;
use Livewire\Volt\Component;

new class extends Component {
    public $data;
}; ?>

<p>
    Child 2: {{ $data }}<br/>ID :{{ $this->__id }}
</p>