<?php

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

new class extends Component {
public $data = [
    [
        'category' => 'Apples',
        'date' => '2025-10-01',
        'linear' => 60,
        '2024' => 45,
        '2025' => 25,
        '2026' => 30,
        '2027' => 36,
        '2028' => 42,
    ],
    [
        'category' => 'Bananas',
        'date' => '2025-11-01',
        'linear' => 70,
        '2024' => 22,
        '2025' => 15,
        '2026' => 18,
        '2027' => 24,
        '2028' => 12,
    ],
    [
        'category' => 'Oranges',
        'date' => '2025-12-01',
        'linear' => 80,
        '2024' => 18,
        '2025' => 12,
        '2026' => 24,
        '2027' => 30,
        '2028' => 5,
    ],
];
};

?>

<div class="flex">
    <flux:chart wire:model="data" class="mt-12 w-[600px] aspect-2/1">
        <flux:chart.svg>
            <flux:chart.line field="2024" class="text-pink-500 dark:text-pink-400" />

            <flux:chart.axis axis="x" field="linear">
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
            <flux:chart.tooltip.value field="2027" label="2027" />
        </flux:chart.tooltip>
    </flux:chart>
    <flux:chart wire:model="data" class="mt-12 w-[600px] aspect-2/1">
        <flux:chart.svg>
            <flux:chart.bar field="2028" class="text-teal-500 dark:text-teal-400" width="70%" min-height="3" />

            <flux:chart.axis axis="x" field="linear">
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
            <flux:chart.tooltip.value field="2027" label="2027" />
        </flux:chart.tooltip>
    </flux:chart>
    <flux:chart wire:model="data" class="mt-12 w-[600px] aspect-2/1">
        <flux:chart.svg>
            <flux:chart.stack width="70%" gap="2px">
                <flux:chart.bar field="2024" class="text-blue-500 dark:text-blue-400" min-height="3" />
                <flux:chart.bar field="2025" class="text-green-500 dark:text-green-400" min-height="3" />
                <flux:chart.bar field="2026" class="text-red-500 dark:text-red-400" min-height="3" />
                <flux:chart.bar field="2027" class="text-purple-500 dark:text-purple-400" min-height="3" radius="4 0" />
            </flux:chart.stack>

            <flux:chart.axis axis="x" field="category">
                <flux:chart.axis.tick />
            </flux:chart.axis>

            <flux:chart.axis axis="y">
                <flux:chart.axis.grid />
                <flux:chart.axis.tick />
            </flux:chart.axis>

            <flux:chart.zero-line />
            <flux:chart.cursor type="area" />
        </flux:chart.svg>

        <flux:chart.tooltip>
            <flux:chart.tooltip.heading field="category" />
            <flux:chart.tooltip.value field="2024" label="2024"  />
            <flux:chart.tooltip.value field="2025" label="2025" />
            <flux:chart.tooltip.value field="2026" label="2026" />
            <flux:chart.tooltip.value field="2027" label="2027" />
        </flux:chart.tooltip>
    </flux:chart>
    <flux:chart wire:model="data" class="mt-12 w-[600px] aspect-2/1">
        <flux:chart.svg>
            <flux:chart.group width="90%" gap="5%">
                <flux:chart.stack gap="2px">
                    <flux:chart.bar field="2024" class="text-blue-500 dark:text-blue-400" min-height="3" />
                    <flux:chart.bar field="2025" class="text-green-500 dark:text-green-400" min-height="3" radius="4 0" />
                </flux:chart.stack>
                <flux:chart.stack>
                    <flux:chart.bar field="2026" class="text-red-500 dark:text-red-400" width="0.7" min-height="3" />
                    <flux:chart.bar field="2027" class="text-purple-500 dark:text-purple-400" width="0.7" min-height="3" radius="4 0" />
                </flux:chart.stack>
            </flux:chart.group>

            <flux:chart.axis axis="x" field="category">
                <flux:chart.axis.tick />
            </flux:chart.axis>

            <flux:chart.axis axis="y">
                <flux:chart.axis.grid />
                <flux:chart.axis.tick />
            </flux:chart.axis>

            <flux:chart.zero-line />
            <flux:chart.cursor type="area" />
        </flux:chart.svg>

        <flux:chart.tooltip>
            <flux:chart.tooltip.heading field="category" />
            <flux:chart.tooltip.value field="2024" label="2024" />
            <flux:chart.tooltip.value field="2025" label="2025" />
            <flux:chart.tooltip.value field="2026" label="2026" />
            <flux:chart.tooltip.value field="2027" label="2027" />
        </flux:chart.tooltip>
    </flux:chart>
    {{-- <flux:chart wire:model="data" class="mt-12 w-[600px] aspect-2/1">
        <flux:chart.svg>
            <flux:chart.line field="2024" class="text-pink-500 dark:text-pink-400" />
            <flux:chart.group width="90%" gap="5%">
                <flux:chart.stack gap="2px">
                    <flux:chart.bar field="2024" class="text-blue-500 dark:text-blue-400" min-height="3" />
                    <flux:chart.bar field="2025" class="text-green-500 dark:text-green-400" min-height="3" radius="4 0" />
                </flux:chart.stack>
                <flux:chart.stack>
                    <flux:chart.bar field="2026" class="text-red-500 dark:text-red-400" width="0.7" min-height="3" />
                    <flux:chart.bar field="2027" class="text-purple-500 dark:text-purple-400" width="0.7" min-height="3" radius="4 0" />
                </flux:chart.stack>
            </flux:chart.group>
            <flux:chart.stack width="70%" gap="2px">
                <flux:chart.bar field="2024" class="text-blue-500 dark:text-blue-400" min-height="3" />
                <flux:chart.bar field="2025" class="text-green-500 dark:text-green-400" min-height="3" />
                <flux:chart.bar field="2026" class="text-red-500 dark:text-red-400" min-height="3" />
                <flux:chart.bar field="2027" class="text-purple-500 dark:text-purple-400" min-height="3" radius="4 0" />
            </flux:chart.stack>
            <flux:chart.bar field="2028" class="text-teal-500 dark:text-teal-400" width="70%" min-height="3" />

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
            <flux:chart.tooltip.value field="2027" label="2027" />
        </flux:chart.tooltip>
    </flux:chart> --}}
</div>
