<?php

use Livewire\Volt\Component;
use Livewire\WithFileUploads;

new class extends Component {
    use WithFileUploads;

    public $images = [];

    public function saveImages()
    {
        $response = [];

        foreach ($this->images as $image) {
            $response[] = $image->store('images', 'public');
        }

        return $response;
    }

    public $content = <<<'HTML'
    <p>Hello World</p>
    HTML;
};
?>

<div>
    <flux:button wire:click="$refresh">Refresh</flux:button>
    <flux:text>Content: {{ var_export($content, true) }}</flux:text>
    <flux:editor wire:model="content" toolbar="heading | bold italic strike | bullet ordered blockquote | link | align | image" />
    <p>https://placehold.co/800x400</p>
    <p>https://placehold.co/800x400/6A00F5/white</p>

    {{-- <div>
        @foreach ($images as $image)
            <img src="{{ $image->temporaryUrl() }}" />{{ $image->temporaryUrl() }}
        @endforeach
    </div> --}}
</div>
