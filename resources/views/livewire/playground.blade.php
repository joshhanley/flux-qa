<?php

use App\Rules\DateRangeRule;
use Flux\DateRange;
use Flux\DateRangePreset;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new class extends Component {
    public ?DateRange $range = null;

public function rules()
{
    return [
        'range' => ['required', new DateRangeRule],
        //'range.start' => ['required', 'date'],
        //'range.end' => ['required', 'date', 'after:range.start'],
        //'range.preset' => ['nullable', 'in:' . collect(DateRangePreset::cases())->pluck('value')->implode(',')],
    ];
}

    public function submit()
    {
        ray($this->range);
        $this->validate();

        Flux::toast('Date range is valid!', variant: 'success');
    }
};
?>

<div>
    <form wire:submit="submit">
        <flux:date-picker mode="range" label="Range" wire:model.live="range" with-presets />
        <flux:error name="range.start" />
        <flux:error name="range.end" />
        <flux:error name="range.preset" />
        <flux:button variant="primary" type="submit">Submit</flux:button>
    </form>
</div>