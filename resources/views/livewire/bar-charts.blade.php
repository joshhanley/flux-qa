<?php

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

new class extends Component {
public $data = [
    [
        'category' => 'Apples',
        '2024' => 45,
        '2025' => 25,
        '2026' => 30,
        '2027' => 36,
        '2028' => 42,
    ],
    [
        'category' => 'Bananas',
        '2024' => 22,
        '2025' => 15,
        '2026' => 18,
        '2027' => 24,
        '2028' => 12,
    ],
    [
        'category' => 'Oranges',
        '2024' => -18,
        '2025' => -12,
        '2026' => -24,
        '2027' => -30,
        '2028' => 0,
    ],
];
};

?>

<div class="mx-auto max-w-md">
    <flux:chart wire:model="data" class="aspect-2/1" horizontal>
        <flux:chart.svg>
            <flux:chart.line field="2024" class="text-pink-500 dark:text-pink-400" /> 
            <flux:chart.bar field="2028" class="text-purple-500 dark:text-purple-400" width="0.7" min-height="3" />

            <flux:chart.axis axis="x" field="index">
                <flux:chart.axis.grid />
                <flux:chart.axis.tick />
            </flux:chart.axis>

            <flux:chart.axis axis="y" field="category">
                <flux:chart.axis.tick />
            </flux:chart.axis>

            {{-- <flux:chart.axis axis="x" field="category">
                <flux:chart.axis.tick />
            </flux:chart.axis>

            <flux:chart.axis axis="y">
                <flux:chart.axis.grid />
                <flux:chart.axis.tick />
            </flux:chart.axis> --}}

            {{-- <flux:chart.stack width="0.7" min-height="3">
                <flux:chart.bar field="2024" class="text-blue-500 dark:text-blue-400" />
                <flux:chart.bar field="2025" class="text-red-500 dark:text-red-400" />
            </flux:chart.stack>
            <flux:chart.stack width="0.7">
                <flux:chart.bar field="2026" class="text-green-500 dark:text-green-400" />
                <flux:chart.bar field="2027" class="text-yellow-500 dark:text-yellow-400" />
            </flux:chart.stack> --}}

            {{-- <flux:chart.bar field="2028" class="text-purple-500 dark:text-purple-400" width="0.7" min-height="3" />

            <flux:chart.axis axis="x" field="category">
                <flux:chart.axis.line />
                <flux:chart.axis.tick />
            </flux:chart.axis>

            <flux:chart.axis axis="y" tick-suffix="%">
                <flux:chart.axis.grid />
                <flux:chart.axis.tick />
            </flux:chart.axis> --}}

            {{-- <flux:chart.zero-line />
            <flux:chart.cursor /> --}}
        </flux:chart.svg>

        {{-- <flux:chart.tooltip>
            <flux:chart.tooltip.heading field="category" />
            <flux:chart.tooltip.value field="2024" label="2024" />
            <flux:chart.tooltip.value field="2025" label="2025" />
            <flux:chart.tooltip.value field="2026" label="2026" />
        </flux:chart.tooltip> --}}
    </flux:chart>

    <flux:chart wire:model="data" class="mt-12 aspect-2/1">
        <flux:chart.svg>
            <flux:chart.line field="2024" class="text-pink-500 dark:text-pink-400" /> 
            <flux:chart.bar field="2028" class="text-purple-500 dark:text-purple-400" width="0.7" min-height="3" />

            <flux:chart.axis axis="x" field="category">
                <flux:chart.axis.tick />
            </flux:chart.axis>

            <flux:chart.axis axis="y">
                <flux:chart.axis.grid />
                <flux:chart.axis.tick />
            </flux:chart.axis>

            <flux:chart.zero-line />
            <flux:chart.cursor />
        </flux:chart.svg>

        <flux:chart.tooltip>
            <flux:chart.tooltip.heading field="category" />
            <flux:chart.tooltip.value field="2024" label="2024" />
            <flux:chart.tooltip.value field="2025" label="2025" />
            <flux:chart.tooltip.value field="2026" label="2026" />
        </flux:chart.tooltip>
    </flux:chart>
</div>
