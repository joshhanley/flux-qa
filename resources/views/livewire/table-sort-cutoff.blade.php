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
        <flux:columns>
            <flux:column>Customer</flux:column>
            <flux:column>Date</flux:column>
            <flux:column>Status</flux:column>
            <flux:column>Amount</flux:column>
        </flux:columns>

        <flux:rows>
            <flux:row>
                <flux:cell>Lindsey Aminoff</flux:cell>
                <flux:cell>Jul 29, 10:45 AM</flux:cell>
                <flux:cell>
                    <flux:badge color="green" size="sm" inset="top bottom">Paid</flux:badge>
                </flux:cell>
                <flux:cell variant="strong">$49.00</flux:cell>
            </flux:row>
        </flux:rows>
    </flux:table>
</flux:main>
