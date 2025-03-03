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
    <flux:card class="overflow-hidden min-w-[12rem]">
        <flux:subheading>Revenue</flux:subheading>

        <flux:heading size="xl">$12,345</flux:heading>

        <flux:chart :value="[0, 0, 0, 10, 12, 11, 13, 15, 14, 16, 18, 17, 19, 21, 20]" class="-mx-8 -mb-8 h-[3rem]">
            <flux:chart.svg gutter="0">
                <flux:chart.line class="text-sky-200 dark:text-sky-400" />
                <flux:chart.area class="text-sky-100 dark:text-sky-400/30" />
            </flux:chart.svg>
        </flux:chart>
    </flux:card>
</div>
