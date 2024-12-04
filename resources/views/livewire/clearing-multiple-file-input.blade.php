<?php

use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;
use Livewire\WithFileUploads;

new class extends Component {
    use WithFileUploads;

    public $attachment;
    public $attachments = [];

    public function cancel()
    {
        $this->reset(['attachment', 'attachments']);
    }
};

?>

<div>
    <flux:input type="file" wire:model="attachment" />
    <flux:input type="file" wire:model="attachments" multiple />

    <flux:button wire:click="cancel">Cancel</flux:button>
</div>
