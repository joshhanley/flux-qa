<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Computed;
new class extends Component {
    public $data = [];

    public $categorical = [];

    public function mount()
    {
        //$this->randomData();

        $this->fixedData();

        //$this->categoricalData();
    }

    protected function randomData()
    {
        $visitorsLastNumber = 0;
        $pageViewsLastNumber = 0;
        $data = [];
        for ($i = 0; $i < 500_000; $i++) {
            $data[] = [
                'date' => now()->subDays($i)->format('Y-m-d'),
                'visitors' => ($visitorsLastNumber += rand(-100, 100)),
                'pageViews' => ($pageViewsLastNumber += rand(-100, 100) * 10),
            ];
        }

        $this->data = $data;
    }

    protected function fixedData()
    {
        $this->data = [
            [
                'date' => now()->subYears(100)->format('Y-m-d'),
                'visitors' => 300,
                'pageViews' => 10000,
            ],
            [
                'date' => now()->subYears(200)->format('Y-m-d'),
                'visitors' => 550,
                'pageViews' => 23456,
            ],
            [
                'date' => now()->subYears(300)->format('Y-m-d'),
                'visitors' => -200,
                'pageViews' => -15222,
            ],
        ];
    }

    protected function categoricalData()
    {
        $this->categorical = [
            [
                'site' => 'livewire.laravel.com',
                'visitors' => 10000,
            ],
            [
                'site' => 'fluxui.dev',
                'visitors' => 30000,
            ],
            [
                'site' => 'alpinejs.dev',
                'visitors' => 5000,
            ],
            [
                'site' => 'makevscodeawesome.com',
                'visitors' => 2000,
            ],
        ];
    }
};
?>

<div>
    {{-- <flux:button variant="primary" wire:click="$refresh">Refresh</flux:button> --}}
    {{-- <flux:chart :value="$data" class="aspect-3/1"> --}}
    
    <flux:chart wire:model="data">
        <flux:chart.viewport class="aspect-3/1">
            <flux:chart.svg class="border">
                {{-- <flux:chart.line field="visitors" class="text-pink-500 dark:text-pink-400" />
                <flux:chart.point field="visitors" class="text-pink-500 dark:text-pink-400" /> --}}
                <flux:chart.line field="pageViews" class="text-blue-500 dark:text-blue-400" />
                <flux:chart.point field="pageViews" class="text-blue-500 dark:text-blue-400" />

                <flux:chart.axis axis="x" field="date">
                    <flux:chart.axis.line />
                    <flux:chart.axis.grid />
                    <flux:chart.axis.tick />
                </flux:chart.axis>

                <flux:chart.axis axis="y" >
                    <flux:chart.axis.line />
                    <flux:chart.axis.grid />
                    <flux:chart.axis.tick text-anchor="middle" dx="-2.5rem" />
                </flux:chart.axis>
                
                <flux:chart.zero-line />

                <flux:chart.cursor />
            </flux:chart.svg>

            <flux:chart.tooltip>
                <flux:chart.tooltip.heading field="date" :format="['year' => 'numeric', 'month' => 'long', 'day' => 'numeric']" class="text-blue-500 font-bold" />
                <flux:chart.tooltip.value field="visitors" label="Visitors">
                </flux:chart.tooltip.value>
                <flux:chart.tooltip.value field="pageViews" label="Page Views" />
            </flux:chart.tooltip>
        </flux:chart.viewport>

        <div class="flex justify-center gap-4 pt-4">
            <flux:chart.legend label="Visitors" class="border">
                <flux:chart.legend.indicator class="bg-blue-400" />
            </flux:chart.legend>

            <flux:chart.legend label="Views">
                <flux:chart.legend.indicator class="bg-red-400" />

                <x-slot:label>
                    <flux:label>asdasdsad</flux:label>
                </x-slot:label>
            </flux:chart.legend>
        </div>
    </flux:chart>

    {{-- <flux:chart wire:model="categorical" class="aspect-3/1">
        <flux:chart.svg viewBoxPadding="0 0 30 0">
            <flux:chart.line field="visitors2" class="text-pink-500 dark:text-pink-400" />

            <flux:chart.axis axis="x" field="site">
                <flux:chart.axis.line />
                <flux:chart.axis.grid />
                <flux:chart.axis.tick />
            </flux:chart.axis>

            <flux:chart.axis axis="y" field="visitors">
                <flux:chart.axis.line />
                <flux:chart.axis.grid />
                <flux:chart.axis.tick />
                <flux:chart.axis.zero stroke-width="4" />
            </flux:chart.axis>

            <flux:chart.cursor />
        </flux:chart.svg>
    </flux:chart> --}}
</div>
