<?php

use Carbon\Carbon;
use Flux\DateRange;
use Livewire\Volt\Component;

new class extends Component {
    public DateRange $range;
    public array $data = [];

    public function mount(): void
    {
        $this->loadData();
    }

    public function loadData(): void
    {
        $this->range = new DateRange(
            Carbon::now()->subDays(rand(1, 100)),
            Carbon::now()
        );
        $dates = [];
        for ($date = $this->range->start->copy(); $date->lte($this->range->end); $date->addDay()) {
            $formatted = $date->format('Y-m-d');
            $dates[$formatted] = [
                'date' => $formatted,
                'created_tasks' => rand(0, rand(10, 100)), // rand(rand(0, 10), rand(-10,0)),
            ];
        }

        $this->data = array_values($dates);
    }

}; ?>

<div>
    <flux:button wire:click="loadData">Load Data</flux:button>

    <flux:chart wire:model="data" class="aspect-3/1">
        <flux:chart.svg>
            <flux:chart.line field="created_tasks" class="text-blue-500 dark:text-blue-400" />

            <flux:chart.axis axis="x" field="date">
                <flux:chart.axis.tick />
            </flux:chart.axis>

            <flux:chart.axis axis="y">
                <flux:chart.axis.grid />
                <flux:chart.axis.tick />
            </flux:chart.axis>

            <flux:chart.zero-line />

            <flux:chart.cursor />
        </flux:chart.svg>
    </flux:chart>
</div>