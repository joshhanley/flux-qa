<?php

use App\Models\User;
use Livewire\Volt\Component;

new class extends Component {
    
}; ?>

<div>
    Child
    <button type="button" x-on:click="$el.parentElement.remove()" class="border rounded">Remove</button>
</div>
