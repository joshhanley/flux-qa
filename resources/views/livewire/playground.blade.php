<?php

use Livewire\Volt\Component;

new class extends Component {
    public $types = [
        'type1' => 'Type 1',
        'type2' => 'Type 2',
        'type3' => 'Type 3',
    ];

    public $sites = [
        ['value' => 1, 'label' => 'Site 1'],
        ['value' => 2, 'label' => 'Site 2'],
        ['value' => 3, 'label' => 'Site 3'],
    ];
};
?>

<div>
    <flux:field>
        <flux:label>Choose Type</flux:label>
        <flux:select wire:model="form.type" :filter="false" placeholder="Choose type">
            @foreach ($types as $value => $label)
                <flux:option value="{{ $value }}">
                    {{ $label }}
                </flux:option>
            @endforeach
        </flux:select>
        @error('form.type')
        <flux:error name="form.type"/>
        @enderror
    </flux:field>

    <flux:field>
        <flux:label>Choose Site</flux:label>
        <flux:select wire:model="form.site_id" :filter="false" placeholder="Choose site">
            @foreach ($sites as $site)
                <flux:option value="{{ $site['value'] }}">
                    {{ $site['label'] }}
                </flux:option>
            @endforeach
        </flux:select>
        @error('form.site_id')
        <flux:error name="form.site_id"/>
        @enderror
    </flux:field>
</div>