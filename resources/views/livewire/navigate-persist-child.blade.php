<?php

use App\Models\User;
use Livewire\Volt\Component;

new class extends Component {
    public function mount()
    {
        ray('mounting slow persisted child');
    }
}; ?>

<div>
    Child
</div>
