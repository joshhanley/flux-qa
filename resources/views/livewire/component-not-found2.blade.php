<?php

use Flux\Flux;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public $search = '';

    public $items = [
        "Happiness",
        "Friendship",
        "Adventure",
        "Love",
        "Courage",
        "Peace",
        "Joy",
        "Wisdom",
        "Dream",
        "Hope",
        "Faith",
        "Freedom",
        "Passion",
        "Family",
        "Success",
        "Knowledge",
        "Memory",
        "Trust",
        "Beauty",
        "Strength",
        "Inspiration",
        "Harmony",
        "Respect",
        "Creativity",
        "Empathy",
        "Gratitude",
        "Justice",
        "Kindness",
        "Reflection",
        "Unity",
    ];

    #[Computed]
    public function things()
    {
        // Mimic a 3p search request
        sleep(1);

        $things = collect($this->items)->filter(function ($thing) {
            return str_contains(strtolower($thing), strtolower($this->search));
        })->take(10);

        return $things;
    }
}; ?>

<div class="bg-white p-4">
    <input wire:model.live="search" type="search" placeholder="Search..." class="text-black">
    <ul>
        @foreach ($this->things as $item)
            <li wire:key="thing-{{ $item }}">
                <livewire:things-child :word="$item" :key="'item-' . $item" />
            </li>
        @endforeach
    </ul>
</div>