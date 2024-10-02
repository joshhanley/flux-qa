<?php

use App\Components;
use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {};

?>

<div container>
    <ul class="list-disc space-y-1">
        @foreach (Components::get() as $componentName)
            <li>
                <flux:link href="{{ $componentName }}">{{ str($componentName)->headline() }}</flux:link>
            </li>
        @endforeach
    </ul>
</div>
