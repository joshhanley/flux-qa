<?php

use App\Rules\DateRangeRule;
use Flux\DateRange;
use Flux\DateRangePreset;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new class extends Component {
    public ?DateRange $range = null;

    public function mount()
    {
        $this->range = new DateRange(
            now()->subDays(1),
            now()->subDays(3),
        );
    }

    public function rules()
    {
        return [
            'range' => ['required'],
            'range.start' => ['required', 'date', 'before:range.end'],
            'range.end' => ['required', 'date', 'after:range.start'],
            'range.preset' => ['nullable', 'in:' . collect(DateRangePreset::cases())->pluck('value')->implode(',')],
        ];
    }

    public function submit()
    {
        $this->validate();

        Flux::toast('Date range is valid!', variant: 'success');
    }
};
?>

<div>
    <form wire:submit="submit">
        <flux:date-picker mode="range" label="Range" wire:model.live="range" with-presets />
        <flux:button variant="primary" type="submit">Submit</flux:button>
    </form>
</div>