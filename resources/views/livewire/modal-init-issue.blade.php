<?php

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;
use Livewire\WithPagination;

new class extends Component {
    public $change = false;
}; ?>

<div>
    <flux:button wire:click="$toggle('change')">Change</flux:button>
    <div>
        @if ($change)
            <div>
                <flux:modal.trigger name="confirm-a">
                    <flux:button tooltip="Delete" size="sm" icon:variant="mini" icon="trash">A</flux:button>
                </flux:modal.trigger>

                <flux:modal name="confirm-a" class="md:w-96 space-y-6">
                    Delete A
                </flux:modal>
            </div>
        @else
            <div>
                <flux:modal.trigger name="confirm-b">
                    <flux:button tooltip="Delete" size="sm" icon:variant="mini" icon="trash">B</flux:button>
                </flux:modal.trigger>

                <flux:modal name="confirm-b" class="md:w-96 space-y-6">
                    Delete B
                </flux:modal>
            </div>
        @endif
    </div>
</div>
