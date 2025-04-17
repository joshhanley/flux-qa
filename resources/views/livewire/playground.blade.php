<?php

use Livewire\Volt\Component;
use Livewire\WithFileUploads;

new class extends Component
{
    use WithFileUploads;

    public $content = '';
    public $images = [];

    public function saveImages()
    {
        $response = [];

        foreach ($this->images as $image) {
            $response[] = $image->store('images', 'public');
        }

        $this->images = [];

        return $response;
    }
};
?>

<div>
    <flux:editor wire:model.live="content" toolbar="heading | bold italic strike | bullet ordered blockquote | link | align | image" />
</div>
