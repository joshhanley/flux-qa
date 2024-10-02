<?php

use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {};

?>

<div class="space-y-4">
    {{-- <flux:card>
        <flux:card.header class="border-b bg-gray-50">Use this page to test the following issues</flux:card.header>
        <flux:card.body class="divide-y">
            <div>
                <flux:heading size="lg">All ok 👌</flux:heading>
            </div>
        </flux:card.body>
    </flux:card> --}}
<flux:field variant="inline">
    <flux:checkbox wire:model="terms" />

    <flux:label>I agree to the terms and conditions</flux:label>

    <flux:error name="terms" />
</flux:field>
    <flux:checkbox wire:model="terms" label="I agree to the terms and conditions" />
</div>
