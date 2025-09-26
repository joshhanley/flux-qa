<?php

use App\Models\User;
use Livewire\Component;

new class extends Component {
    public function mount()
    {
        ray('mounting slow persisted child');
    }
}; ?>

<div>
    Child
</div>
