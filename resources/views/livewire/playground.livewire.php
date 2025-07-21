<?php

use Livewire\Component;

new class extends Component {
    //
} ?>

<div>
    @ray($this->getName())
    @island
        <div>Island content</div>
    @endisland

    @island(view: 'components.external-island')

    <livewire:nested.playground />
</div>
