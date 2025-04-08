<?php

use Livewire\Volt\Component;

new class extends Component {
    //
};
?>

<div x-data="{ ids: [1, 2, 3], selectedIds: [], selectedId: null, payment: 'ach', single: false }" class="bg-white">
    <flux:checkbox.group x-model="selectedIds">
        <template x-for="id in ids" :key="id">
            <div class="flex items-center gap-2">
                <flux:checkbox x-bind:value="id" x-on:input="console.log('input', $event.target.value)"/>
                <span x-text="id"></span>
            </div>
        </template>
    </flux:checkbox.group>

    <flux:checkbox x-model="single" label="Single" value="test" />

    <input type="checkbox" />

   <!-- When you check a checkbox, it will print a random string here instead of a selected id -->
    <p>Selected checkboxes: <span x-text="selectedIds"></span></p>
    <p>Selected radio: <span x-text="selectedId"></span></p>
    <p>Payment: <span x-text="payment"></span></p>
    <p>Single: <span x-text="single"></span></p>
    <flux:radio.group x-model="payment" label="Select your payment method">
        <flux:radio value="cc" label="Credit Card" />
        <flux:radio value="paypal" label="Paypal" />
        <flux:radio value="ach" label="Bank transfer" />
    </flux:radio.group>

    <flux:radio.group x-model="payment" label="Select your payment method">
        <flux:radio label="Credit Card" />
        <flux:radio label="Paypal" />
        <flux:radio label="Bank transfer" />
    </flux:radio.group>

    <div>Here: <span x-model="payment"></span></div>

    <input type="radio" name="test"  />
    <input type="radio" name="test"  />
    <input type="radio" name="test"  />

    <flux:radio.group x-model="selectedId">
        <template x-for="id in ids" :key="id">
            <div class="flex items-center gap-2">
                <flux:radio x-bind:value="id" x-bind:label="id" x-on:input="console.log('input', $event.target.value)"/>
                <span x-text="id"></span>
            </div>
        </template>
    </flux:radio.group>
</div>
