<?php

use Livewire\Volt\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\SupportFileUploads;

new class extends Component
{
    use WithFileUploads;

    public $content = '';
    public $images = [];

    public function uploadIt($fileData)
    {
        ray($fileData);

        Storage::disk('public')->put('something.png', $fileData[0]);

        ray('done!');
    }
};
?>

<div x-data="{
    async uploadFile() {
        console.log(this.$refs.file);
        let file = this.$refs.file.files[0];

        console.log(file, file.text());

        let fileText = await file.arrayBuffer();

        fileText = new Uint8Array(fileText);

        console.log(fileText);

        $wire.uploadIt([fileText, file.type]);        
    }
}">
    <flux:button icon:trailing="chevron-down">Open</flux:button>
    <input type="file" x-ref="file" />
    <button x-on:click="uploadFile()">Upload</button>
    {{-- <flux:editor wire:model.live="content" toolbar="heading | bold italic strike | bullet ordered blockquote | link | align | image" class="[&_[data-slot=content]]:min-h-[100px]" /> --}}
</div>
