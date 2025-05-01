<?php

use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new class extends Component {
    //
};

?>

<flux:main class="space-y-4 w-96">
    <flux:table>
        <flux:table.columns>
            <flux:table.column>Customer</flux:table.column>
            <flux:table.column>Date</flux:table.column>
            <flux:table.column>Status</flux:table.column>
            <flux:table.column>Amount</flux:table.column>
        </flux:table.columns>

        <flux:table.rows>
            <flux:table.row>
                <flux:table.cell>Lindsey Aminoff</flux:table.cell>
                <flux:table.cell>Jul 29, 10:45 AM</flux:table.cell>
                <flux:table.cell>
                    <flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge>
                </flux:table.cell>
                <flux:table.cell variant="strong">$49.00</flux:table.cell>
            </flux:table.row>
        </flux:table.rows>
    </flux:table>
</flux:main>
