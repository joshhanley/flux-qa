<?php

use Livewire\Volt\Component;

new class extends Component {
    public $content;
};
?>

<div>
    <flux:editor wire:model="content" label="Content" mentions="[
        'joshhanley' => 'Josh Hanley',
        'calebporzio' => 'Caleb Porzio',
    ]" />
</div>
