<?php

use Carbon\Carbon;
use Carbon\CarbonInterface;
use Flux\DateRange;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component
{
    public array $range;

    public function mount(): void
    {
        $startOfWeek = Carbon::now()->startOfWeek(CarbonInterface::SUNDAY);
        $endOfWeek = $startOfWeek->copy()->addDays(6);
        $this->range = [
            'start' => $startOfWeek,
            'end' => $endOfWeek
        ];
    }

    #[Computed]
    public function rangeObject(): DateRange
    {
        return new DateRange($this->range['start'], $this->range['end']);
    }
};
?>

<div class="mx-auto w-7xl flex flex-col gap-5 p-5">

    <div class="flex">
        <flux:date-picker
            mode="range"
            size="sm"
            wire:model.live="range"
            min-range="7"
            max-range="31"
            start-day="0"
            with-confirmation="true"
            presets="thisWeek lastWeek thisMonth lastMonth last14Days last30Days"
        />
    </div>

    <div class="flex gap-3">
        @foreach($this->rangeObject as $date)

            <div>
                {{ $date->format('D, M j') }}
            </div>

        @endforeach
    </div>

</div>
