<?php

use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new class extends Component {
    public $search;

    #[Computed]
    public function commands()
    {
        $commands = collect(['Assign to…', 'Create new file', 'Create new project', 'Documentation', 'Changelog', 'Settings']);

        return $commands->filter(function ($command) {
            return str_contains(strtolower($command), strtolower($this->search));
        });
    }
};

?>

<flux:main class="space-y-4 w-96">
    <flux:command :filter="false">
        <flux:command.input wire:model.live="search" placeholder="Search..." />

        <flux:command.items>
            @foreach ($this->commands as $command)
                <flux:command.item wire:click="..." icon="user-plus">{{ $command }}</flux:command.item>
            @endforeach
        </flux:command.items>
    </flux:command>
</flux:main>
