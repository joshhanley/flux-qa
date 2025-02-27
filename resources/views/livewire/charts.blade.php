<?php

use Flux\DateRange;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public $data = [];

    public $categorical = [];

    public function mount()
    {
        //$this->randomData();

        $this->fixedData();

        //$this->categoricalData();
    }

    public function changeData()
    {
        $this->randomData();
    }

    #[Computed]
    public function someData()
    {
        $visitorsLastNumber = 0;
        $pageViewsLastNumber = 0;
        $data = [];
        for ($i = 0; $i < 300; $i++) {
            $data[] = [
                'date' => now()->subDays($i)->format('Y-m-d'),
                'visitors' => ($visitorsLastNumber += rand(-100, 100)),
                'pageViews' => ($pageViewsLastNumber += rand(-100, 100) * 10),
            ];
        }

        return $data;
    }

    protected function randomData()
    {
        $visitorsLastNumber = 0;
        $pageViewsLastNumber = 0;
        $data = [];
        for ($i = 0; $i < 300; $i++) {
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
                'date' => now()->subMinutes(1)->roundMinute()->toIsoString(),
                'visitors' => 300,
                'pageViews' => 10000,
            ],
            [
                'date' => now()->subMinutes(5)->roundMinute()->toIsoString(),
                'visitors' => 550,
                'pageViews' => 23456,
            ],
            [
                'date' => now()->subMinutes(9)->roundMinute()->toIsoString(),
                'visitors' => 200,
                'pageViews' => 15222,
            ],
        ];
    }

    protected function categoricalData()
    {
        $this->categorical = [
            [
                'site' => 'livewire.laravel.com',
                'visitors' => 10000,
                'date' => now()->subDays(1)->format('Y-m-d'),
            ],
            [
                'site' => 'fluxui.dev',
                'visitors' => 30000,
                'date' => now()->subDays(2)->format('Y-m-d'),
            ],
            [
                'site' => 'alpinejs.dev',
                'visitors' => 5000,
                'date' => now()->subDays(3)->format('Y-m-d'),
            ],
            [
                'site' => 'makevscodeawesome.com',
                'visitors' => 2000,
                'date' => now()->subDays(4)->format('Y-m-d'),
            ],
        ];
    }
};
?>

<div>
    <flux:button variant="primary" wire:click="changeData">Change Data</flux:button>


    <flux:chart wire:model="data" class="aspect-3/1">
        <flux:chart.svg class="border">
            <flux:chart.line field="visitors" class="text-pink-500 dark:text-pink-400" />

            <flux:chart.axis axis="x" field="date" tick-count="2">
                <flux:chart.axis.tick />
                <flux:chart.axis.line />
            </flux:chart.axis>

            <flux:chart.axis axis="y">
                <flux:chart.axis.tick />
                <flux:chart.axis.line />
            </flux:chart.axis>
        </flux:chart.svg>
    </flux:chart>
    {{-- <flux:chart :value="$this->data"> --}}
    {{-- <flux:chart wire:model="data">
        <flux:chart.viewport class="aspect-3/1">
            <flux:chart.svg class="border">
                <flux:chart.line field="visitors" class="text-pink-500 dark:text-pink-400" />
                <flux:chart.point field="visitors" class="text-pink-500 dark:text-pink-400" />
                <flux:chart.line field="pageViews" class="text-blue-500 dark:text-blue-400" />
                <flux:chart.point field="pageViews" class="text-blue-500 dark:text-blue-400" />

                <flux:chart.axis axis="x" field="date" tick-count="">
                    <flux:chart.axis.line />
                    <flux:chart.axis.grid />
                    <flux:chart.axis.tick />
                </flux:chart.axis>

                <flux:chart.axis axis="y" :tick-values="[0, 5500, 11000, 16500, 22000, 27500]">
                    <flux:chart.axis.line />
                    <flux:chart.axis.grid />
                    <flux:chart.axis.tick />
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
            <flux:chart.legend label="Visitors">
                <flux:chart.legend.indicator class="bg-blue-400" />
            </flux:chart.legend>

            <flux:chart.legend label="Views">
                <flux:chart.legend.indicator class="bg-red-400" />
            </flux:chart.legend>
        </div>
    </flux:chart> --}}

    {{-- <flux:chart :value="[1,4,7,9]">
        <flux:chart.viewport class="aspect-3/1">
            <flux:chart.svg class="">
                <flux:chart.line class="text-pink-500 dark:text-pink-400" />

                <flux:chart.axis axis="x" position="bottom">
                    <flux:chart.axis.line />
                    <flux:chart.axis.grid />
                    <flux:chart.axis.tick />
                </flux:chart.axis>

                <flux:chart.axis axis="y" position="right">
                    <flux:chart.axis.line />
                    <flux:chart.axis.grid />
                    <flux:chart.axis.tick />
                </flux:chart.axis>
            </flux:chart.svg>
        </flux:chart.viewport>

        <div class="flex justify-center gap-4 pt-4">
            <flux:chart.legend label="Visitors">
                <flux:chart.legend.indicator class="bg-blue-400" />
            </flux:chart.legend>

            <flux:chart.legend label="Views">
                <flux:chart.legend.indicator class="bg-red-400" />
            </flux:chart.legend>
        </div>
    </flux:chart> --}}

    {{-- <flux:chart wire:model="categorical" class="aspect-3/1">
        <flux:chart.svg>
            <flux:chart.line field="date" class="text-pink-500 dark:text-pink-400" />

            <flux:chart.axis axis="x" field="site">
                <flux:chart.axis.line />
                <flux:chart.axis.grid />
                <flux:chart.axis.tick />
            </flux:chart.axis>

            <flux:chart.axis axis="y" field="date" scale="time">
                <flux:chart.axis.line />
                <flux:chart.axis.grid />
                <flux:chart.axis.tick />
            </flux:chart.axis>

            <flux:chart.cursor />
        </flux:chart.svg>
    </flux:chart> --}}
</div>
