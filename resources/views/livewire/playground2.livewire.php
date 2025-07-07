<?php

use Livewire\Component;

new class extends Component {
    //
} ?>

<div>
    @island
        <div>
            <p>Outer island</p>
            <div>
                @island
                    <p>Inner island</p>
                @endisland
            </div>
        </div>
    @endisland
</div>