<?php

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

new class extends Component {
    use WithFileUploads;
    #[Validate(['photos.*' => 'image|max:1024'])]
    public $photos;

    public function mount() {
        $this->photos = collect();
    }

    public function removePhoto($index)
    {
        $photo = $this->photos[$index];
        $photo->delete();
        unset($this->photos[$index]);
        $this->photos = array_values($this->photos);
    }
    public function save()
    {
        foreach ($this->photos as $photo) {
            $photo->store(path: 'photos');
        }
        return $this->redirect('...');
    }
};

?>

<div class="mx-auto max-w-md">
    {{-- <div>
        <p>Photos:</p>
        @foreach ($photos as $photo)
            <p>{{ $photo->getFilename() }}</p>
        @endforeach
    </div> --}}

    <form wire:submit="save">
        {{-- <input type="file" wire:model="photos" multiple /> --}}

        <flux:file-upload wire:model="photos" label="Upload files" multiple>
            <flux:file-upload.dropzone heading="Drop files here or click to browse" text="JPG, PNG, GIF up to 10MB" />
        </flux:file-upload>
        <div class="mt-3 flex flex-col gap-2">
            @foreach ($photos as $index => $photo)
                <flux:file-item
                    :heading="$photo->getClientOriginalName()"
                    :image="$photo->temporaryUrl()"
                    :size="$photo->getSize()"
                >
                    <x-slot name="actions">
                        <flux:file-item.remove wire:click="removePhoto({{ $index }})" aria-label="{{ 'Remove file: ' . $photo->getClientOriginalName() }}" />
                    </x-slot>
                </flux:file-item>
            @endforeach
        </div>
        <flux:button type="submit">Save</flux:button>
    </form>
</div>
