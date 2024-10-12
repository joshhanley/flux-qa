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

        <flux:option>Photography asdad awdawdawdhjawd awdaw dilwadjawldhaw dwad h</flux:option>
        <flux:option>Design services awda wdlaiwdjh srfksjhfakejdha wdakwjdhjaekjdh </flux:option>
        <flux:option>Web development</flux:option>
        <flux:option>Accounting</flux:option>
        <flux:option>Legal services</flux:option>
        <flux:option>Consulting</flux:option>
        <flux:option>Other</flux:option>
    </flux:select>
</flux:main>
