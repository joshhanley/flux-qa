<?php

use Livewire\Attributes\On;
use Livewire\Volt\Component;

new class extends Component {
    #[Paginator]
    public $posts = {
        get => Post::paginate(10),
    }

    #[Island]
    public function posts() {
        return Post::paginate(10);
    }
} ?>
<div>
    <div wire:intersect="posts.loadPrevious" wire:show="posts.hasPrevious"></div>

    @island('posts')
    <div>
        @foreach ($posts as $post)
            <div>{{ $post->title }}</div>
        @endforeach
    </div>
    @endisland

    <div wire:click="posts.loadNext" wire:show="posts.hasMore"></div>
</div>
