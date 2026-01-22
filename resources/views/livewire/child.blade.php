<?php

use Livewire\Attributes\Modelable;
use Livewire\Component;

new class extends Component {
    #[Modelable]
    public string $some;
}; ?>

<div>
    {{ $some }}
</div>