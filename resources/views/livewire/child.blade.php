<?php

use Livewire\Attributes\Url;
use Livewire\Component;

new class extends Component {
    #[Url]
    public $foo = 'bar';
}; ?>

<div>
    Child: {{ $foo }}
</div>