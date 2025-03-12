<?php

use Livewire\Attributes\Lazy;
use Livewire\Volt\Component;

new
#[Lazy]
class extends Component {
    //
}; ?>

<flux:card>
    <flux:chart :value="[1,2,3,4,5,6,7,8,9,10]">
        <flux:chart.summary class="flex gap-12">
            <flux:subheading size="lg">Users past 6 months</flux:subheading>
        </flux:chart.summary>

        <flux:chart.viewport class="aspect-[3/1] xl:aspect-[5/1]">
            <flux:chart.svg>
                <flux:chart.line class="text-green-500 dark:text-green-400" />

                <flux:chart.axis axis="x">
                    <flux:chart.axis.line />
                    <flux:chart.axis.tick />
                </flux:chart.axis>

                <flux:chart.axis axis="y">
                    <flux:chart.axis.grid />
                    <flux:chart.axis.tick />
                </flux:chart.axis>
            </flux:chart.svg>
        </flux:chart.viewport>
    </flux:chart>
</flux:card>
