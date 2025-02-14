<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Computed;
new class extends Component {
    #[Computed]
    public function data()
    {
        $visitorsLastNumber = 0;
        $pageViewsLastNumber = 0;
        $data = [];
        for ($i = 0; $i < 300; $i++) {
            $data[] = [
                'date' => now()->subDays($i)->format('Y-m-d'),
                'visitors' => ($visitorsLastNumber += rand(-100, 100)),
                'pageViews' => ($pageViewsLastNumber += (rand(-100, 100) * 10)),
            ];
        }

        return $data;
    }
};
?>

<div>
    {{-- <flux:button variant="primary" wire:click="$refresh">Refresh</flux:button> --}}
    <flux:chart :value="$this->data" class="aspect-3/1">
        <flux:chart.svg>
            <flux:chart.line field="visitors" class="text-pink-500 dark:text-pink-400" />
            {{-- <flux:chart.point field="visitors" class="text-pink-500 dark:text-pink-400" /> --}}
            <flux:chart.line field="pageViews" class="text-blue-500 dark:text-blue-400" />
            {{-- <flux:chart.point field="pageViews" class="text-blue-500 dark:text-blue-400" /> --}}

            <flux:chart.axis axis="x" field="date">
                <flux:chart.axis.line />
                <flux:chart.axis.grid />
                <flux:chart.axis.tick />
            </flux:chart.axis>

            <flux:chart.axis axis="y">
                <flux:chart.axis.line />
                <flux:chart.axis.grid />
                <flux:chart.axis.tick />
                <flux:chart.axis.zero stroke-width="4" />
            </flux:chart.axis>

            <flux:chart.cursor />
        </flux:chart.svg>

        <flux:chart.tooltip>
            <flux:chart.tooltip.heading field="date" :format="['year' => 'numeric', 'month' => 'long', 'day' => 'numeric']" />
            <flux:chart.tooltip.value field="visitors" label="Visitors" />
            <flux:chart.tooltip.value field="pageViews" label="Page Views" />
        </flux:chart.tooltip>
    </flux:chart>
</div>
