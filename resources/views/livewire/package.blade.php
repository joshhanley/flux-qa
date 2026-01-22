<?php

use Livewire\Component;

new class extends Component {
    public $show = false;
}; ?>

<div>
    {{-- <livewire:package-counter />
    <livewire:single-file-counter />
    <livewire:multi-file-counter /> --}}
    <livewire:mypackage::package-counter />
    <livewire:mypackage::single-file-counter />
    <livewire:mypackage::multi-file-counter />
</div>
