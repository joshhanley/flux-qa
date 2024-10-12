<?php

use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new class extends Component {
    public function save()
    {
        sleep(5);
    }
};

?>

<flux:main class="space-y-4">
    <button popovertarget="my-popover">Open Popover</button>

    <div popover id="my-popover">Greetings, one and all!</div>

    <flux:input />
</flux:main>
