<?php

use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {};

?>

<flux:body container class="space-y-4">
    <flux:card>
        <flux:card.header class="border-b bg-gray-50">Use this page to test the following issues</flux:card.header>
        <flux:card.body class="divide-y">
            <div>
                <flux:heading size="lg">All ok 👌</flux:heading>
            </div>
        </flux:card.body>
    </flux:card>

    <flux:accordion transition exclusive>
        <flux:accordion.item heading="Test1">
            <flux:accordion.content>
                Some content for accordian 1.
            </flux:accordion.content>
        </flux:accordion.item>

        <flux:accordion.item heading="Test2" disabled>
            <flux:accordion.content>
                Some content for accordian 2.

                Lorem, ipsum<br>dolor<br>sit<br>amet<br>consectetur<br>adipisicing<br>elit.<br>Eius,<br>est.<br>Quas<br>iure<br>error<br>exercitationem<br>optio modi repellendus eum voluptatum ab!
                Nulla ipsa eaque accusantium similique
                ipsam libero quia magni molestias.
            </flux:accordion.content>
        </flux:accordion.item>

        <flux:accordion.item heading="Test3" expanded>
            <flux:accordion.content>
                Some content for accordian 3.
            </flux:accordion.content>
        </flux:accordion.item>
    </flux:accordion>
</flux:body>
