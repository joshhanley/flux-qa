<?php

use Livewire\Attributes\Locked;
use Livewire\Component;

new class extends Component
{
    #[Locked]
    public $userId;

    public function edit($userId)
    {
        $this->userId = $userId;
    }
};
?>

<flux:modal x-on:edit-user.window="$wire.edit($event.detail.userId)" name="edit-user" class="w-96">
    <div>
        <flux:heading size="lg" wire:loading.remove wire:target="edit">Editing user {{ $userId }}</flux:heading>
        <flux:heading size="lg" wire:loading wire:target="edit">Loading...</flux:heading>
    </div>
</flux:modal>
