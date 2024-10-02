<?php

use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public $userId = null;
    public $postId = null;

    #[Computed]
    public function users()
    {
        return User::query()
            ->when($this->userId, fn($query, $value) => $query->whereLike('name', "{$value}%"))
            ->orderBy('name')
            ->get();
    }

    #[Computed]
    public function posts()
    {
        return Post::query()
            ->when($this->userId, fn($query) => $query->where('user_id', $this->userId))
            ->orderBy('title')
            ->get();
    }
};
?>

<div class="space-y-4">
    <flux:card>
        <flux:card.header class="border-b bg-gray-50">Use this page to test the following issues</flux:card.header>
        <flux:card.body class="divide-y">
            <div>
                <flux:heading size="lg">Clicking in input doesn't show results</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    Clicking in the input doesn't show results. They are only shown when something is typed in. But if you type something and then delete it, all the results are shown.
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. Click in the user input below and no results are shown.
                </flux:text>
            </div>

            <div>
                <flux:heading size="lg">Highlighted item off screen</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    If you arrow down until you highlight one of the items that are off the sceen, keep typing, and then backspace to delete the text, the item will still be highlighted but it will be
                    off the screen. Where as if you do it with one that is already on the screen, it will be in view.
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. Click in the user input below and type "a" to filter the results.<br>
                    2. Arrow down to highlight the last item.<br>
                    3. Type the next letter to filter the results and the same item should be highlighted.<br>
                    4. Backspace to delete the last character and the item will be off the screen.<br>
                    5. Up arrow to highlight the second last time to see where the highlight is and it scrolls into view then.
                </flux:text>
            </div>
        </flux:card.body>
    </flux:card>

    <flux:text>User ID: {{ $userId }}</flux:text>
    <flux:text>Post ID: {{ $postId }}</flux:text>

    <flux:autocomplete>
        <flux:input wire:model.live="userId" label="User" placeholder="Choose user..." />
        <flux:autocomplete.items class="max-h-56">
            @foreach ($this->users as $user)
                <flux:autocomplete.item wire:key="{{ $user->id }}" value="{{ $user->id }}">{{ $user->name }}</flux:autocomplete.item>
            @endforeach
        </flux:autocomplete.items>
    </flux:autocomplete>

    <flux:autocomplete>
        <flux:input wire:model.live="postId" label="Post" :placeholder="$userId ? 'Choose post...' : 'Please select a user first'" :disabled="!$userId" />
        <flux:autocomplete.items class="max-h-56">
            @foreach ($this->posts as $post)
                <flux:autocomplete.item value="{{ $post->id }}">{{ $post->title }}</flux:autocomplete.item>
            @endforeach
        </flux:autocomplete.items>
    </flux:autocomplete>
</div>
