<?php

use Livewire\Component;

new class extends Component {
    public function save() {
        // ray('save');
    }

    public function other() {
        // ray('other');
    }
} ?>

<div>
    @island()
        <div>
            <p>Outer island</p>
            @island(mode: 'append')
                <div>
                    <p>Inner island22</p>
                    @island(name: 'bob', view: 'bobs-view')
                    @island('bob', view: 'bobs-view')
                    @island(view: 'anonymous-view')
                    @island(data: ['name' => 'John'], view: 'anonymous-view2')
                </div>
            @endisland
        </div>
        <button wire:click="other" x-on:click="$wire.save()">Refresh</button>
        {{-- <x-islandinblade /> --}}
    @endisland

</div>
