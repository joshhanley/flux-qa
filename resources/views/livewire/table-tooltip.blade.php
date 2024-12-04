<?php

use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new class extends Component {
    //
};

?>

<flux:main>
    <flux:table>
        <flux:columns>
            <flux:column>Data</flux:column>
        </flux:columns>
        <flux:rows>
            <flux:row>
                <flux:cell>
                    <flux:tooltip content="Tooltip Content">
                        <p>Data</p>
                    </flux:tooltip>
                </flux:cell>
            </flux:row>
        </flux:rows>
    </flux:table>
</flux:main>
