<?php

use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {};

?>

<flux:main class="space-y-4">
    {{-- <div x-data="{ open: false }">
        <flux:table>
            <flux:table.columns>
                <flux:table.column>Customer</flux:table.column>
                <flux:table.column>Date</flux:table.column>
                <flux:table.column>Status</flux:table.column>
                <flux:table.column>Amount</flux:table.column>
            </flux:table.columns>

            <flux:table.rows>
                <flux:table.row>
                    <flux:table.cell>
                        <div x-show="open" x-cloak>
                            Dropdown Contents...
                        </div>
                    </flux:table.cell>
                    <flux:table.cell>Jul 29, 10:45 AM</flux:table.cell>
                    <flux:table.cell>
                        <flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge>
                    </flux:table.cell>
                    <flux:table.cell variant="strong"><button x-on:click="open = ! open">Toggle Dropdown</button></flux:table.cell>

                </flux:table.row>

                <flux:table.row>
                    <flux:table.cell>Hanna Lubin</flux:table.cell>
                    <flux:table.cell>Jul 28, 2:15 PM</flux:table.cell>
                    <flux:table.cell>
                        <flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge>
                    </flux:table.cell>
                    <flux:table.cell variant="strong">$312.00</flux:table.cell>
                </flux:table.row>

                <flux:table.row>
                    <flux:table.cell>Kianna Bushevi</flux:table.cell>
                    <flux:table.cell>Jul 30, 4:05 PM</flux:table.cell>
                    <flux:table.cell>
                        <flux:badge color="zinc" size="sm" inset="top bottom">Refunded</flux:badge>
                    </flux:table.cell>
                    <flux:table.cell variant="strong">$132.00</flux:table.cell>
                </flux:table.row>

                <flux:table.row>
                    <flux:table.cell>Gustavo Geidt</flux:table.cell>
                    <flux:table.cell>Jul 27, 9:30 AM</flux:table.cell>
                    <flux:table.cell>
                        <flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge>
                    </flux:table.cell>
                    <flux:table.cell variant="strong">$31.00</flux:table.cell>
                </flux:table.row>
            </flux:table.rows>
        </flux:table>
    </div> --}}

    <flux:table>
        <flux:table.columns>
            <flux:table.column>Group</flux:table.column>
            <flux:table.column>Linked Through</flux:table.column>
        </flux:table.columns>

        <flux:table.rows>
            <flux:table.row wire:key="group-1" x-data="{ open: false }">

                <flux:table.cell variant="strong">
                    <div x-show="open">
                        Dropdown Contents...
                    </div>
                </flux:table.cell>
                <flux:table.cell>
                    <button x-on:click="open = ! open">Toggle Dropdown</button>
                </flux:table.cell>
            </flux:table.row>
        </flux:table.rows>
    </flux:table>
</flux:main>
