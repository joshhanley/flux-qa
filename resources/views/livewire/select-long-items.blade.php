<?php

use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new class extends Component {
    public function save()
    {
        sleep(5);
    }
};

?>

<flux:main class="space-y-4 w-96">
    <flux:select variant="listbox" searchable placeholder="Choose industries...">
        <x-slot name="search">
            <flux:select.search placeholder="Search..." />
        </x-slot>

        <flux:select.option>Photography asdad awdawdawdhjawd awdaw dilwadjawldhaw dwad h</flux:select.option>
        <flux:select.option>Design services awda wdlaiwdjh srfksjhfakejdha wdakwjdhjaekjdh </flux:select.option>
        <flux:select.option>Web development</flux:select.option>
        <flux:select.option>Accounting</flux:select.option>
        <flux:select.option>Legal services</flux:select.option>
        <flux:select.option>Consulting</flux:select.option>
        <flux:select.option>Other</flux:select.option>
    </flux:select>
</flux:main>
