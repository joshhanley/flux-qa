<?php

use App\Models\User;
use Livewire\Attributes\Lazy;
use Livewire\Volt\Component;

new
#[Lazy(isolate: false)]
class extends Component {
    public $word;

    public function placeholder() 
    {
        return '<div>Loading...</div>';
    }

}; ?>

<div>
    {{ $word }}
</div>
