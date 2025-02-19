<?php

use Flux\DateRange;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public ?DateRange $range = null;
    // public array $range = [];

    public function mount()
    {
        //$this->dateRange = DateRange::last7Days();
    }
};
?>

<div>
    <flux:card>
        <div class="space-y-3">
            <flux:heading size="lg">Date picker w/ range test</flux:heading>

            <input type="date" />

            <flux:date-picker
                wire:model.live="range"
                mode="range"
                months="1"
                with-presets
                fixed-weeks
                {{-- value="{{ $filters->from }}/{{ $filters->to }}" --}}
            />

            <flux:button wire:click="saveRange">Save</flux:button>

            <div>
                $this->range->start() = {{ $range?->start()->toDateTimeString() }} ({{ $range?->start()->getTimezone() }})
            </div>

            <div>
                $this->range->end() = {{ $range?->end()->toDateTimeString() }} ({{ $range?->end()->getTimezone() }})
            </div>
            {{-- <div>
                $this->range->start() = {{ $range['start'] ?? null }}
            </div>

            <div>
                $this->range->end() = {{ $range['end'] ?? null }}
            </div> --}}

            {{ var_export($range, true) }}
        </div>
    </flux:card>

</div>
