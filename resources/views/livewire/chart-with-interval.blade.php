<?php

use Livewire\Volt\Component;

new class extends Component {
    public array $dataset = [
        [
            'date' => '2025-01-01',
            'visitors' => 0
        ],
        [
            'date' => '2025-01-08',
            'visitors' => 10
        ],
        [
            'date' => '2025-01-15',
            'visitors' => 20
        ],
        [
            'date' => '2025-01-22',
            'visitors' => 30
        ],
        [
            'date' => '2025-01-29',
            'visitors' => 40
        ],
        [
            'date' => '2025-02-05',
            'visitors' => 50
        ],
        [
            'date' => '2025-02-12',
            'visitors' => 60
        ],
        [
            'date' => '2025-02-19',
            'visitors' => 70
        ],
        [
            'date' => '2025-02-26',
            'visitors' => 80
        ],
        [
            'date' => '2025-03-05',
            'visitors' => 50
        ],
    ];
};
?>

<div>
    <flux:chart wire:model="dataset" class="aspect-3/1">
        <flux:chart.svg>
            <flux:chart.line field="visitors" class="text-blue-500 dark:text-blue-400" />
            <flux:chart.point field="visitors" class="text-blue-500 dark:text-blue-400" />

            <flux:chart.axis axis="y" interval="20">
                <flux:chart.axis.grid />
                <flux:chart.axis.tick />
            </flux:chart.axis>

            <flux:chart.axis axis="x" field="date" interval="week">
                <flux:chart.axis.tick />
                <flux:chart.axis.line />
            </flux:chart.axis>
        </flux:chart.svg>
    </flux:chart>
</div>
