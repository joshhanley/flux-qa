<?php

use Livewire\Attributes\Url;
use Livewire\Volt\Component;

new class extends Component {
    #[Url(history: true)]
    public $search1;

    #[Url(history: true)]
    public $search2;

    #[Url(history: true)]
    public $search3;

    #[Url(history: true)]
    public $search4;

    #[Url(history: true)]
    public $search5;

    #[Url(history: true)]
    public $search6;

    #[Url(history: true)]
    public $search7;

    #[Url(history: true)]
    public $search8;

    #[Url(history: true)]
    public $search9;

    #[Url(history: true)]
    public $search10;

    #[Url(history: true)]
    public $search11;

    #[Url(history: true)]
    public $search12;

    #[Url(history: true)]
    public $search13;

    #[Url(history: true)]
    public $search14;

    #[Url(history: true)]
    public $search15;

    #[Url(history: true)]
    public $search16;

    #[Url(history: true)]
    public $search17;

    #[Url(history: true)]
    public $search18;

    #[Url(history: true)]
    public $search19;

    #[Url(history: true)]
    public $search20;

    #[Url(history: true)]
    public $search21;

    #[Url(history: true)]
    public $search22;

    #[Url(history: true)]
    public $search23;

    #[Url(history: true)]
    public $search24;

    #[Url(history: true)]
    public $search25;

    #[Url(history: true)]
    public $search26;

    #[Url(history: true)]
    public $search27;

    #[Url(history: true)]
    public $search28;

    #[Url(history: true)]
    public $search29;

    #[Url(history: true)]
    public $search30;

    #[Url(history: true)]
    public $search31;

    #[Url(history: true)]
    public $search32;

    #[Url(history: true)]
    public $search33;

    #[Url(history: true)]
    public $search34;

    #[Url(history: true)]
    public $search35;

    #[Url(history: true)]
    public $search36;

    #[Url(history: true)]
    public $search37;

    #[Url(history: true)]
    public $search38;

    #[Url(history: true)]
    public $search39;

    #[Url(history: true)]
    public $search40;

    #[Url(history: true)]
    public $search41;

    #[Url(history: true)]
    public $search42;

    #[Url(history: true)]
    public $search43;

    #[Url(history: true)]
    public $search44;

    #[Url(history: true)]
    public $search45;

    #[Url(history: true)]
    public $search46;

    #[Url(history: true)]
    public $search47;

    #[Url(history: true)]
    public $search48;

    #[Url(history: true)]
    public $search49;

    #[Url(history: true)]
    public $search50;

    #[Url(history: true)]
    public $search51;

    #[Url(history: true)]
    public $search52;

    #[Url(history: true)]
    public $search53;

    #[Url(history: true)]
    public $search54;

    #[Url(history: true)]
    public $search55;

    #[Url(history: true)]
    public $search56;

    #[Url(history: true)]
    public $search57;

    #[Url(history: true)]
    public $search58;

    #[Url(history: true)]
    public $search59;

    #[Url(history: true)]
    public $search60;

    #[Url(history: true)]
    public $search61;

    #[Url(history: true)]
    public $search62;

    #[Url(history: true)]
    public $search63;

    #[Url(history: true)]
    public $search64;

    #[Url(history: true)]
    public $search65;

    #[Url(history: true)]
    public $search66;

    #[Url(history: true)]
    public $search67;

    #[Url(history: true)]
    public $search68;

    #[Url(history: true)]
    public $search69;

    #[Url(history: true)]
    public $search70;

    #[Url(history: true)]
    public $search71;

    #[Url(history: true)]
    public $search72;

    #[Url(history: true)]
    public $search73;

    #[Url(history: true)]
    public $search74;

    #[Url(history: true)]
    public $search75;

    #[Url(history: true)]
    public $search76;

    #[Url(history: true)]
    public $search77;

    #[Url(history: true)]
    public $search78;

    #[Url(history: true)]
    public $search79;

    #[Url(history: true)]
    public $search80;

    #[Url(history: true)]
    public $search81;

    #[Url(history: true)]
    public $search82;

    #[Url(history: true)]
    public $search83;

    #[Url(history: true)]
    public $search84;

    #[Url(history: true)]
    public $search85;

    #[Url(history: true)]
    public $search86;

    #[Url(history: true)]
    public $search87;

    #[Url(history: true)]
    public $search88;

    #[Url(history: true)]
    public $search89;

    #[Url(history: true)]
    public $search90;

    #[Url(history: true)]
    public $search91;

    #[Url(history: true)]
    public $search92;

    #[Url(history: true)]
    public $search93;

    #[Url(history: true)]
    public $search94;

    #[Url(history: true)]
    public $search95;

    #[Url(history: true)]
    public $search96;

    #[Url(history: true)]
    public $search97;

    #[Url(history: true)]
    public $search98;

    #[Url(history: true)]
    public $search99;

    #[Url(history: true)]
    public $search100;
}; ?>

<div>
    <p>Search1: {{ $search1 }}</p>
    <a href="/playground">Playground</a>
    @foreach (range(1, 100) as $item)
        <div>
            <input wire:model.live="search{{ $item }}" placeholder="Search{{ $item }}" />
        </div>
        {{-- <livewire:history /> --}}
    @endforeach
</div>
