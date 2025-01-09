<?php

use App\Components;
use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new
#[Layout('components.layouts.sidebar')]
class extends Component {};

?>

<flux:main container>
    <ul class="list-disc space-y-1">
        @foreach (Components::get() as $componentName)
            <li>
                <flux:link wire:navigate href="{{ $componentName }}">{{ str($componentName)->headline() }}</flux:link>
            </li>
        @endforeach
    </ul>
</flux:main>
