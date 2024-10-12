<?php

use Livewire\Attributes\Computed;
use Livewire\Volt\Component;
use Livewire\WithPagination;

new class extends Component {
    public $tab = 'account';
};

?>

<flux:main class="space-y-4">
    <flux:tab.group wire:model="tab">
        <flux:tabs>
            <flux:tab name="profile">Profile</flux:tab>
            <flux:tab name="account">Account</flux:tab>
            <flux:tab name="billing">Billing</flux:tab>
        </flux:tabs>

        <flux:tab.panel name="profile" class="!py-0"></flux:tab.panel>
        <flux:tab.panel name="account" class="!py-0"></flux:tab.panel>
        <flux:tab.panel name="billing" class="!py-0"></flux:tab.panel>
    </flux:tab.group>
</flux:main>
