<?php

use Livewire\Volt\Component;

new class extends Component {
    public $tab = 'account';
};
?>

<div>
    <livewire:random lazy />
    @livewire('random', ['lazy' => true])
</div>
