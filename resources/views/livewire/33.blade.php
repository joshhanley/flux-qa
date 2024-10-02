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
            <flux:columns>
                <flux:column>Customer</flux:column>
                <flux:column>Date</flux:column>
                <flux:column>Status</flux:column>
                <flux:column>Amount</flux:column>
            </flux:columns>

            <flux:rows>
                <flux:row>
                    <flux:cell>
                        <div x-show="open" x-cloak>
                            Dropdown Contents...
                        </div>
                    </flux:cell>
                    <flux:cell>Jul 29, 10:45 AM</flux:cell>
                    <flux:cell>
                        <flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge>
                    </flux:cell>
                    <flux:cell variant="strong"><button x-on:click="open = ! open">Toggle Dropdown</button></flux:cell>

                </flux:row>

                <flux:row>
                    <flux:cell>Hanna Lubin</flux:cell>
                    <flux:cell>Jul 28, 2:15 PM</flux:cell>
                    <flux:cell>
                        <flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge>
                    </flux:cell>
                    <flux:cell variant="strong">$312.00</flux:cell>
                </flux:row>

                <flux:row>
                    <flux:cell>Kianna Bushevi</flux:cell>
                    <flux:cell>Jul 30, 4:05 PM</flux:cell>
                    <flux:cell>
                        <flux:badge color="zinc" size="sm" inset="top bottom">Refunded</flux:badge>
                    </flux:cell>
                    <flux:cell variant="strong">$132.00</flux:cell>
                </flux:row>

                <flux:row>
                    <flux:cell>Gustavo Geidt</flux:cell>
                    <flux:cell>Jul 27, 9:30 AM</flux:cell>
                    <flux:cell>
                        <flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge>
                    </flux:cell>
                    <flux:cell variant="strong">$31.00</flux:cell>
                </flux:row>
            </flux:rows>
        </flux:table>
    </div> --}}

    <flux:table>
        <flux:columns>
            <flux:column>Group</flux:column>
            <flux:column>Linked Through</flux:column>
        </flux:columns>

        <flux:rows>
            <flux:row wire:key="group-1" x-data="{ open: false }">

                <flux:cell variant="strong">
                    <div x-show="open">
                        Dropdown Contents...
                    </div>
                </flux:cell>
                <flux:cell>
                    <button x-on:click="open = ! open">Toggle Dropdown</button>
                </flux:cell>
            </flux:row>
        </flux:rows>
    </flux:table>
</flux:main>
