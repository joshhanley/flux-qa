<?php

use Flux\Flux;
use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <flux:input label="test" value="test"  />
    <flux:select label="test">
       <flux:select.option >test</flux:select.option>
    </flux:select>
    <flux:select label="test" variant="listbox">
        <flux:select.option selected>test</flux:select.option>
    </flux:select>
</div>