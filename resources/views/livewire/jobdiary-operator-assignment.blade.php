<?php

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new class extends Component {
    public $show = true;

    public $operatorSearch = '';

    public $operatorIds = [];

    public $notes = '';

    #[Computed]
    public function selectedOperators()
    {
        return User::query()
            ->whereIn('id', array_keys($this->operatorIds))
            ->orderBy('name')
            ->get();
    }

    #[Computed]
    public function allOperators()
    {
        return User::query()
            ->when($this->operatorSearch, fn ($query, $value) => $query->where('name', 'like', '%' . $value . '%'))
            ->limit(20)
            ->get();
    }

    #[Computed]
    public function operatorsString()
    {
        $operatorsString = $this->selectedOperators
            ->map(
                fn ($operator) => $operator->name . ($this->operatorIds[$operator->id]['order'] !== '' ? ' ' . $this->operatorIds[$operator->id]['order'] : '')
            )
            ->join(', ');

        if ($this->notes !== '') {
            $operatorsString .= ', ' . $this->notes;
        }

        return $operatorsString;
    }

    public function addOperator($id)
    {
        $this->operatorIds[$id] = [
            'id' => $id,
            'order' => '',
            'active' => false,
        ];
    }
}; ?>

<div>
    <flux:card class="mt-12 mx-auto w-3xl grid gap-4">
        <flux:textarea label="Notes" placeholder="Notes" />

        <flux:separator />

        <flux:input variant="filled" label="Operators" placeholder="Operators" disabled :value="$this->operatorsString" />

        <div>
            <flux:modal.trigger name="manage-operators">
                <flux:button variant="outline" size="sm" icon="user-group" icon:variant="outline">
                    Manage Operators
                </flux:button>
            </flux:modal.trigger>

            <flux:modal name="manage-operators" class="w-2xl max-w-none" wire:model="show">
                <div class="space-y-6">
                    <div>
                        <flux:heading size="lg">Manage Operators</flux:heading>
                    </div>

                    <div class="rounded-xl px-3 pt-2 pb-4 bg-zinc-50 border border-gray-300 space-y-6">
                        <div>
                            {{-- <flux:label>Assigned Operators</flux:label> --}}

                            <flux:table>
                                <flux:table.columns>
                                    <flux:table.column class="w-full">Name</flux:table.column>
                                    <flux:table.column class="min-w-28">Order</flux:table.column>
                                    <flux:table.column align="center">Active</flux:table.column>
                                    <flux:table.column class="min-w-12"></flux:table.column>
                                </flux:table.columns>

                                <flux:table.rows>
                                    @forelse ($this->selectedOperators as $operator)
                                        <flux:table.row wire:key="selected-operator-{{ $operator->id }}" :class="$operatorIds[$operator->id]['active'] ? 'bg-green-500/5' : ''" x-bind:class="{
                                            'bg-green-500/5': $wire.operatorIds[{{ $operator->id }}]['active'],
                                        }">
                                            <flux:table.cell>{{ $operator->name }}</flux:table.cell>
                                            <flux:table.cell>
                                                <flux:input wire:model="operatorIds.{{ $operator->id }}.order" placeholder="Order" size="sm" />
                                            </flux:table.cell>
                                            <flux:table.cell align="center">
                                                <div class="flex items-center justify-center">
                                                    <flux:checkbox wire:model="operatorIds.{{ $operator->id }}.active" />
                                                </div>
                                            </flux:table.cell>
                                            <flux:table.cell>
                                                <flux:button variant="ghost" size="sm" icon="x-mark" icon:variant="mini" inset="" />
                                            </flux:table.cell>
                                        </flux:table.row>
                                    @empty
                                        <flux:table.row>
                                            <flux:table.cell colspan="3" class="text-center">No operators assigned</flux:table.cell>
                                        </flux:table.row>
                                    @endforelse
                                </flux:table.rows>
                            </flux:table>

                            <flux:separator />

                            <flux:select variant="combobox" placeholder="Search Operators" class="mt-2 [&_ui-options]:max-h-48">
                                <x-slot name="input">
                                    <flux:select.input wire:model="operatorSearch" x-ref="input" icon="magnifying-glass" />
                                </x-slot>

                                @foreach ($this->allOperators as $operator)
                                    <flux:select.option :wire:key="$operator->id" x-on:click.prevent.stop="$wire.addOperator({{ $operator->id }}); $refs.input.focus()" :value="$operator->id" class="py-2">
                                        {{ $operator->name }}
                                    </flux:select.option>
                                @endforeach
                            </flux:select>
                        </div>

                        <flux:input label="Notes" placeholder="Notes" wire:model="notes" />
                    </div>

                    <div class="flex">
                        <flux:spacer />

                        <flux:modal.close>
                            <flux:button wire:click="$refresh">Close</flux:button>
                        </flux:modal.close>
                    </div>
                </div>
            </flux:modal>
        </div>

        <flux:separator />

        <div class="flex items-center gap-4">
            <flux:button variant="primary">Save</flux:button>
            <flux:button variant="ghost">Cancel</flux:button>
        </div>
    </flux:card>
</div>
