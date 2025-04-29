<?php

use Livewire\Volt\Component;

new class extends Component {
    public $prepend = false;
    public $initial = true;

    #[\Livewire\Attributes\Computed]
    public function data()
    {
        if ($this->prepend) {
            return ['A', 'B', 'C'];
        }

        //return [0, 1];
        //return [0, 2];
        return ['A', 'C'];
    }

    public function dehydrate()
    {
        $this->initial = false;
    }
};
?>

<div>
    <button wire:click="$toggle('prepend')">Prepend</button>
    <div>
        @foreach ($this->data as $index => $item)
            <div wire:key="{{ $item }}">
                @foreach ($this->data as $index2 => $item2)
                    <div @if(true) test @endif {{ 1 < 2 ? 'test' : 'test2' }}
                        x-data="{
                            test: 'test',
                            test() {
                                console.log('test {{ $item }} {{ $item2 }}');
                            },
                            test2() {
                                console.log('test2 {{ $item }} {{ $item2 }}');
                            }
                        }" x-init="1 < 2 || 2 > 1 ? test() : test2()" wire:key="{{ $item2 }}">
                        <livewire:child :item="$item . $item2" />
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
