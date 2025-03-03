<?php

use App\Models\User;
use Flux\Flux;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    //
};
?>

<div class="flex">
    <svg class="border " width="300" height="300" viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg">
        <circle cx="150" cy="150" r="3" fill="red" />

        <g transform="translate(150, 150)">
            <text
                text-anchor="middle"
                dy="1.5rem"
                fill="currentColor"
                class="text-xs text-zinc-400 font-medium"
            >
                Test Text
            </text>
        </g>
    </svg>
    <svg class="border " width="300" height="300" viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg">
        <circle cx="150" cy="150" r="3" fill="red" />

        <g transform="translate(150, 150)">
            <text
                text-anchor="middle"
                dominant-baseline="text-before-edge"
                dy="1em"
                fill="currentColor"
                class="text-xs text-zinc-400 font-medium"
            >
                Test Text
            </text>
        </g>
    </svg>
</div>

@script
<script>
    let svg = document.querySelector('svg');
    let group = document.querySelector('g');
    let text = document.querySelector('text');

    console.log(`svg size - height: ${svg.getBoundingClientRect().height} width: ${svg.getBoundingClientRect().width}`);

    console.log(`group bbox - y: ${group.getBBox().y} height: ${group.getBBox().height}`);
    console.log(`text bbox - y: ${text.getBBox().y} height: ${text.getBBox().height}`);
</script>
@endscript