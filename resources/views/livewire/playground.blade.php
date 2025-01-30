<?php

use Livewire\Volt\Component;

new class extends Component {
    //
};
?>

<div>
    <flux:select variant="listbox" multiple>
        @foreach (range('A', 'Z') as $value)
            <flux:option value="{{ $value }}">{{ $value }}</flux:option>
        @endforeach
    </flux:select>
</div>
