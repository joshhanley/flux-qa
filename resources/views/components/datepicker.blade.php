@php
use App\Helpers\DateHelper;
@endphp

@props([
    'label' => null,
    'wireModel' => null,
    'badge' => null,
    'minDate' => null,
    'maxDate' => null,
    'icon' => 'calendar',
    'enableTime' => false,
    'time24hr' => true,
])

<div x-data="{
    initFlatpickr() {
        return {
            ['x-init']() {
                flatpickr(this.$refs.datepicker, {
                    enableTime: @js($enableTime),
                    dateFormat: @js($enableTime ? DateHelper::format('datetime') : DateHelper::format('date')),
                    time_24hr: @js($time24hr),
                    minDate: @js($minDate),
                    maxDate: @js($maxDate),
                    onChange: (selectedDates, dateStr) => {
                        $wire.set('{{ $wireModel }}', dateStr);
                    }
                });
            }
        }
    }
}">
    <flux:input
        x-bind="initFlatpickr()"
        x-ref="datepicker"
        wire:model="{{ $wireModel }}"
        :label="$label"
        :badge="$badge"
        :icon="$icon"
    />
</div>

@assets
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@endassets
