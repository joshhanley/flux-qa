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
        <flux:table.columns>
            <flux:table.column>Data</flux:table.column>
        </flux:table.columns>
        <flux:table.rows>
            <flux:table.row>
                <flux:table.cell>
                    <flux:tooltip content="Tooltip Content">
                        <p>Data</p>
                    </flux:tooltip>
                </flux:table.cell>
            </flux:table.row>
        </flux:table.rows>
    </flux:table>
</flux:main>
