<?php

use Carbon\Carbon;
use FluxPro\DateRange;
use FluxPro\DateRangePreset;
use Livewire\Volt\Component;

new class extends Component {
    public ?string $date = null;
    public ?DateRange $range = null;
    public $terms = true;

    public function mount()
    {
        //$this->date = [
        //    Carbon::create(2025, 3, 25),
        //    Carbon::create(2025, 3, 29),
        //    Carbon::create(2025, 3, 30),
        //];
        $this->date = Carbon::create(2025, 3, 25)->toDateString();

        dump($this->date);

        //$this->range = new DateRange(
        //    Carbon::create(2025, 3, 25),
        //    Carbon::create(2025, 3, 28),
        //);

        //$this->range = DateRange::last6Months();
        //dump($this->range->setTimezone('Australia/Sydney'));
    }

    public function dehydrate()
    {
        // ray($this->range);
    }
};
?>

<div>
    {{-- <flux:checkbox wire:model.live="terms" label="I agree to the terms and conditions" /> --}}
    <button type="button" wire:click="$refresh">Refresh</button>
    {{-- <flux:text>Date: {{ var_export($date, true) }}</flux:text> --}}
    {{-- <flux:text>Date: {{ $date }}</flux:text> --}}

    {{-- <flux:date-picker wire:model.live="date" clearable /> --}}
    {{-- <flux:date-picker wire:model.live="date">
        <x-slot name="trigger">
            <flux:date-picker.input />
        </x-slot>
    </flux:date-picker>
    <flux:date-picker wire:model.live="date" start-day="1" clearable /> --}}
    {{-- <flux:calendar /> --}}
    {{-- <flux:calendar wire:model.live="date" start-day="1" week-numbers />
    <flux:calendar wire:model="date" selectable-header /> --}}
    {{-- <div class="flex">
        <flux:calendar wire:model.live="date" months="1" week-numbers />
        <flux:calendar wire:model.live="date" months="1" week-numbers fixed-weeks />
        <flux:calendar wire:model.live="date" months="1" start-day="1" week-numbers />
        <flux:calendar wire:model.live="date" months="1" start-day="1" week-numbers fixed-weeks />
    </div>
    <div class="flex">
        <flux:calendar wire:model.live="date" months="1" selectable-header week-numbers />
        <flux:calendar wire:model.live="date" months="1" selectable-header week-numbers fixed-weeks />
        <flux:calendar wire:model.live="date" months="1" selectable-header start-day="1" week-numbers />
        <flux:calendar wire:model.live="date" months="1" selectable-header start-day="1" week-numbers fixed-weeks />
    </div>
    <div class="flex">
        <flux:calendar wire:model.live="date" months="2" week-numbers />
        <flux:calendar wire:model.live="date" months="2" week-numbers fixed-weeks />
        <flux:calendar wire:model.live="date" months="2" start-day="1" week-numbers />
        <flux:calendar wire:model.live="date" months="2" start-day="1" week-numbers fixed-weeks />
    </div>
    <div class="flex">
        <flux:calendar wire:model.live="date" months="2" selectable-header week-numbers />
        <flux:calendar wire:model.live="date" months="2" selectable-header week-numbers fixed-weeks />
        <flux:calendar wire:model.live="date" months="2" selectable-header start-day="1" week-numbers />
        <flux:calendar wire:model.live="date" months="2" selectable-header start-day="1" week-numbers fixed-weeks />
    </div>
    <div class="flex">
        <flux:date-picker wire:model.live="date" with-today months="2" week-numbers />
        <flux:date-picker wire:model.live="date" with-today months="2" week-numbers fixed-weeks />
        <flux:date-picker wire:model.live="date" with-today months="2" start-day="1" week-numbers />
        <flux:date-picker wire:model.live="date" with-today months="2" start-day="1" week-numbers fixed-weeks />
    </div>
    <div class="flex">
        <flux:date-picker wire:model.live="date" months="2" selectable-header week-numbers />
        <flux:date-picker wire:model.live="date" months="2" selectable-header week-numbers fixed-weeks />
        <flux:date-picker wire:model.live="date" months="2" selectable-header start-day="1" week-numbers />
        <flux:date-picker wire:model.live="date" months="2" selectable-header start-day="1" week-numbers fixed-weeks />
    </div>
    <div class="flex">
        <flux:calendar wire:model.live="date" start-day="2" week-numbers />
        <flux:calendar wire:model.live="date" start-day="3" week-numbers />
        <flux:calendar wire:model.live="date" start-day="4" week-numbers />
        <flux:calendar wire:model.live="date" start-day="5" week-numbers />
        <flux:calendar wire:model.live="date" start-day="6" week-numbers />
    </div> --}}

    <flux:text>Range: {{ var_export($range, true) }}</flux:text>
    <flux:text>Range: {{ $range }}</flux:text>

    {{-- <div class="flex">
        <flux:calendar mode="range" wire:model="range" months="1" week-numbers />
        <flux:calendar mode="range" wire:model="range" months="1" week-numbers fixed-weeks />
        <flux:calendar mode="range" wire:model="range" months="1" start-day="1" week-numbers />
        <flux:calendar mode="range" wire:model="range" months="1" start-day="1" week-numbers fixed-weeks />
    </div>
    <div class="flex">
        <flux:calendar mode="range" wire:model="range" months="1" selectable-header week-numbers />
        <flux:calendar mode="range" wire:model="range" months="1" selectable-header week-numbers fixed-weeks />
        <flux:calendar mode="range" wire:model="range" months="1" selectable-header start-day="1" week-numbers />
        <flux:calendar mode="range" wire:model="range" months="1" selectable-header start-day="1" week-numbers fixed-weeks />
    </div>
    <div class="flex">
        <flux:calendar mode="range" wire:model="range" months="2" week-numbers />
        <flux:calendar mode="range" wire:model="range" months="2" week-numbers fixed-weeks />
        <flux:calendar mode="range" wire:model="range" months="2" start-day="1" week-numbers />
        <flux:calendar mode="range" wire:model="range" months="2" start-day="1" week-numbers fixed-weeks />
    </div>
    <div class="flex">
        <flux:calendar mode="range" wire:model="range" months="2" selectable-header week-numbers />
        <flux:calendar mode="range" wire:model="range" months="2" selectable-header week-numbers fixed-weeks />
        <flux:calendar mode="range" wire:model="range" months="2" selectable-header start-day="1" week-numbers />
        <flux:calendar mode="range" wire:model="range" months="2" selectable-header start-day="1" week-numbers fixed-weeks />
    </div> --}}
    {{-- <div class="flex">
        <flux:date-picker mode="range" wire:model="range" with-today months="2" with-presets week-numbers />
        <flux:date-picker mode="range" wire:model="range" with-today months="2" with-presets week-numbers fixed-weeks />
        <flux:date-picker mode="range" wire:model="range" with-today months="2" with-presets start-day="1" week-numbers />
        <flux:date-picker mode="range" wire:model="range" with-today months="2" with-presets start-day="1" week-numbers fixed-weeks />
    </div> --}}
    {{-- <div class="flex">
        <flux:date-picker mode="range" wire:model="range" months="2" selectable-header with-presets week-numbers />
        <flux:date-picker mode="range" wire:model="range" months="2" selectable-header with-presets week-numbers fixed-weeks />
        <flux:date-picker mode="range" wire:model="range" months="2" selectable-header with-presets start-day="1" week-numbers />
        <flux:date-picker mode="range" wire:model="range" months="2" selectable-header with-presets start-day="1" week-numbers fixed-weeks />
    </div> --}}
    {{-- <div class="flex">
        <flux:calendar mode="range" wire:model="range" unavailable="2025-02-03,2025-02-05" start-day="2" week-numbers />
        <flux:calendar mode="range" wire:model="range" unavailable="2025-02-03,2025-02-05" start-day="3" week-numbers />
        <flux:calendar mode="range" wire:model="range" unavailable="2025-02-03,2025-02-05" start-day="4" week-numbers />
        <flux:calendar mode="range" wire:model="range" unavailable="2025-02-03,2025-02-05" start-day="5" week-numbers />
        <flux:calendar mode="range" wire:model="range" unavailable="2025-02-03,2025-02-05" start-day="6" week-numbers />
    </div> --}}
    {{-- <flux:calendar mode="range" wire:model="range" />
    <flux:calendar mode="range" selectable-header wire:model="range" /> --}}

    {{-- <flux:date-picker wire:model.live="date">
        <x-slot name="trigger">
            <flux:date-picker.input clearable />
        </x-slot>
    </flux:date-picker> --}}


    {{-- <flux:text>Range: {{ var_export($range, true) }}</flux:text>
    <flux:text>Range: {{ $range }}</flux:text> --}}

    {{-- <flux:date-picker mode="range" value="2025-02-02/2025-02-06" /> --}}
    {{-- <flux:date-picker mode="range" :value="['2025-02-02', '2025-02-06']" /> --}}

    {{-- <flux:date-picker mode="range" wire:model.live="range" min-range="4" max-range="5" clearable /> --}}

    {{-- <flux:date-picker mode="range" wire:model.live="range">
        <x-slot name="trigger">
            <div class="flex flex-col sm:flex-row gap-6 sm:gap-4">
                <flux:date-picker.input label="Start" />
                <flux:date-picker.input label="End" />
            </div>
        </x-slot>
    </flux:date-picker> --}}

    {{-- <flux:date-picker mode="range" wire:model.live="range" with-presets with-confirmation /> --}}
    <p>{{ DateRangePreset::Today->dates()[0]->toDateString() }} - {{ DateRangePreset::Today->dates()[1]->toDateString() }}</p>
    <p>{{ DateRangePreset::Yesterday->dates()[0]->toDateString() }} - {{ DateRangePreset::Yesterday->dates()[1]->toDateString() }}</p>
    <p>{{ DateRangePreset::ThisWeek->dates()[0]->toDateString() }} - {{ DateRangePreset::ThisWeek->dates()[1]->toDateString() }}</p>
    <p>{{ DateRangePreset::LastWeek->dates()[0]->toDateString() }} - {{ DateRangePreset::LastWeek->dates()[1]->toDateString() }}</p>
    <p>{{ DateRangePreset::Last7Days->dates()[0]->toDateString() }} - {{ DateRangePreset::Last7Days->dates()[1]->toDateString() }}</p>
    <p>{{ DateRangePreset::ThisMonth->dates()[0]->toDateString() }} - {{ DateRangePreset::ThisMonth->dates()[1]->toDateString() }}</p>
    <p>{{ DateRangePreset::LastMonth->dates()[0]->toDateString() }} - {{ DateRangePreset::LastMonth->dates()[1]->toDateString() }}</p>
    <p>{{ DateRangePreset::ThisQuarter->dates()[0]->toDateString() }} - {{ DateRangePreset::ThisQuarter->dates()[1]->toDateString() }}</p>
    <p>{{ DateRangePreset::LastQuarter->dates()[0]->toDateString() }} - {{ DateRangePreset::LastQuarter->dates()[1]->toDateString() }}</p>
    <p>{{ DateRangePreset::ThisYear->dates()[0]->toDateString() }} - {{ DateRangePreset::ThisYear->dates()[1]->toDateString() }}</p>
    <p>{{ DateRangePreset::LastYear->dates()[0]->toDateString() }} - {{ DateRangePreset::LastYear->dates()[1]->toDateString() }}</p>
    <p>{{ DateRangePreset::Last14Days->dates()[0]->toDateString() }} - {{ DateRangePreset::Last14Days->dates()[1]->toDateString() }}</p>
    <p>{{ DateRangePreset::Last30Days->dates()[0]->toDateString() }} - {{ DateRangePreset::Last30Days->dates()[1]->toDateString() }}</p>
    <p>{{ DateRangePreset::Last3Months->dates()[0]->toDateString() }} - {{ DateRangePreset::Last3Months->dates()[1]->toDateString() }}</p>
    <p>{{ DateRangePreset::Last6Months->dates()[0]->toDateString() }} - {{ DateRangePreset::Last6Months->dates()[1]->toDateString() }}</p>
    <p>{{ DateRangePreset::YearToDate->dates()[0]->toDateString() }} - {{ DateRangePreset::YearToDate->dates()[1]->toDateString() }}</p>
    {{-- <p>{{ DateRangePreset::AllTime->dates()[0]->toDateString() }} - {{ DateRangePreset::AllTime->dates()[1]->toDateString() }}</p> --}}
    <flux:date-picker start-day="1" mode="range" />
    <flux:date-picker start-day="1" mode="range" value="today" />
    <flux:date-picker start-day="1" mode="range" value="yesterday" />
    ThisWeek
    <flux:date-picker start-day="0" mode="range" value="thisWeek" />
    <flux:date-picker start-day="1" mode="range" value="thisWeek" />
    <flux:date-picker start-day="2" mode="range" value="thisWeek" />
    <flux:date-picker start-day="3" mode="range" value="thisWeek" />
    <flux:date-picker start-day="4" mode="range" value="thisWeek" />
    <flux:date-picker start-day="5" mode="range" value="thisWeek" />
    <flux:date-picker start-day="6" mode="range" value="thisWeek" />
    LastWeek
    <flux:date-picker start-day="1" mode="range" value="lastWeek" />
    <flux:date-picker start-day="1" mode="range" value="last7Days" />
    <flux:date-picker start-day="1" mode="range" value="thisMonth" />
    <flux:date-picker start-day="1" mode="range" value="lastMonth" />
    <flux:date-picker start-day="1" mode="range" value="thisQuarter" />
    <flux:date-picker start-day="1" mode="range" value="lastQuarter" />
    <flux:date-picker start-day="1" mode="range" value="thisYear" />
    <flux:date-picker start-day="1" mode="range" value="lastYear" />
    <flux:date-picker start-day="1" mode="range" value="last14Days" />
    <flux:date-picker start-day="1" mode="range" value="last30Days" />
    <flux:date-picker start-day="1" mode="range" value="last3Months" />
    <flux:date-picker start-day="1" mode="range" value="last6Months" />
    <flux:date-picker start-day="1" mode="range" value="yearToDate" />
    <flux:date-picker start-day="1" mode="range" value="allTime" min="2024-01-01" />
    {{-- <flux:date-picker mode="range" with-presets /> --}}
    {{-- <flux:date-picker
        wire:model.live="range"
        mode="range"
        :min="now()->subYear()->format('Y-m-d')"
        presets="allTime today yesterday thisWeek last7Days thisMonth yearToDate custom"
    /> --}}
    {{-- <flux:date-picker
        wire:model="range"
        mode="range"
        :min="now()->subYear()->format('Y-m-d')"
        presets="allTime today yesterday thisWeek last7Days thisMonth yearToDate custom"
    /> --}}

    {{-- <flux:date-picker wire:model.live="date" with-today selectable-header fixed-weeks start-day="1" /> --}}
    {{-- <flux:date-picker wire:model.live="date" open-to="2026-04-01" /> --}}
    {{-- <flux:date-picker wire:model.live="date" week-numbers  unavailable="2025-02-02,2025-02-04" /> --}}
    {{-- <flux:calendar value="2025-02-05" /> --}}
    {{-- <flux:calendar wire:model.live="date" multiple /> --}}
    {{-- <flux:calendar mode="range" wire:model.live="range" /> --}}
    {{-- <flux:calendar mode="range" value="2025-02-02/2025-02-06" /> --}}
    {{-- <flux:calendar mode="range" months="2" /> --}}
    {{-- <flux:calendar mode="range" size="xl" /> --}}
    {{-- <flux:date-picker wire:model.live="date" size="xs" /> --}}

    {{-- <flux:calendar
        static
        value="2025-03-25"
        size="xs"
        :navigation="false"
    /> --}}

    {{-- <flux:calendar max="yesterday" /> --}}
    {{-- <flux:calendar unavailable="2025-02-02,2025-02-04" /> --}}
    {{-- <flux:calendar with-today /> --}}
    {{-- <flux:calendar selectable-header /> --}}
    {{-- <flux:calendar open-to="2026-03-01" /> --}}
    {{-- <flux:calendar locale="ja-JP" /> --}}
</div>
