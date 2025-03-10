<?php

use Livewire\Volt\Component;

new class extends Component {
    public $data = [42, 57, 46, 98, 24, 78, 35, 75];

    public function changeData()
    {
        $this->data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    }
};
?>

<div>
    <flux:button wire:click="changeData">Change Data</flux:button>
    <flux:card class="w-full overflow-hidden">
        <flux:subheading>Text</flux:subheading>
        <flux:heading size="xl">
            {{ array_sum($data ?? []) }}
        </flux:heading>
        <flux:chart :value="$data" class="-mx-8 -mb-8 h-[3rem]">
            <flux:chart.svg gutter="0">
                <flux:chart.line class="text-sky-200 dark:text-sky-400" />
                <flux:chart.area class="text-sky-100 dark:text-sky-400/30" />
            </flux:chart.svg>
        </flux:chart>
    </flux:card>
</div>
