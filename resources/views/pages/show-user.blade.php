<?php

use App\Models\User;
use Livewire\Component;

new class extends Component {
    public User $user;
}; ?>

<div>
    Name: {{ $user->name }}
</div>