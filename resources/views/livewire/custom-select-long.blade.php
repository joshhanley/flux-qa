<?php

use Livewire\Volt\Component;

new class extends Component {
    //
};

?>

<div>
    <flux:select variant="listbox">
        @foreach (range(1, 100) as $number)
            <flux:select.option>{{ $number }}</flux:select.option>
        @endforeach
    </flux:select>
</div>
