<?php

use Livewire\Volt\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\SupportFileUploads;

new class extends Component
{
    use WithFileUploads;

    public $content = '';
    public $images = [];

    public function uploadIt(
        $files
    )
    {
        ray($files);

        return 'bob';
    }

    public static function saveEditorImages(
        #[SupportFileUploads] $images
    )
    {
        $imageUrls = [];

        foreach ($images as $image) {
            $imageUrls[] = $image->store('images', 'public');
        }

        return $imageUrls;
    }

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
    <flux:editor wire:model.live="content" toolbar="heading | bold italic strike | bullet ordered blockquote | link | align | image" class="[&_[data-slot=content]]:min-h-[100px]" />
</div>
