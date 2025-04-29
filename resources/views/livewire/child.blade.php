<?php

use App\Models\User;
use Livewire\Volt\Component;

new class extends Component {
    public $item;
    public $other;

    public function mount($initial = false)
    {
        if ($initial) {
            $this->other = $this->item;
        }
    }
}; ?>

<div>
    Child {{ $item }}
    {{-- <button wire:click="$refresh">Refresh</button> --}}
    <input wire:model="other" class="border rounded" placeholder="state" />
</div>
