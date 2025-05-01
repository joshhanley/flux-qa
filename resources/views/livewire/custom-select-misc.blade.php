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
        return User::query()->get();
    }

    #[Computed]
    public function posts()
    {
        return Post::query()
            ->when($this->userId, fn($query) => $query->where('user_id', $this->userId))
            ->get();
    }
};

?>

<div class="space-y-4">
    {{-- <flux:card>
        <flux:card.header class="border-b bg-gray-50">Use this page to test the following issues</flux:card.header>
        <flux:card.body class="divide-y">
            <div>
                <flux:heading size="lg">Chrome - Custom select causes layout shift when it is near the bottom of the page</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    This happens in Chrome but works fine in Safari - When a custom select is near the bottom of a page, the dropdown opens below the select trigger, and causes a layout shift/ page to
                    scroll instead of opening above it.
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. Scroll down until the user select is at the bottom of the page.<br>
                    2. Click on the User select.<br>
                    3. The dropdown should open above the User dropdown instead of below it.
                </flux:text>
            </div>

            <div>
                <flux:heading size="lg">Custom select dropdown is shown over the top of a layout sticky header</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    When a custom select dropdown is open and the page is scrolled, the dropdown is displayed over the top of the sticky header instead of below it.
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. Click on the User select.<br>
                    2. Ensure select dropdown is open and scroll down.<br>
                    3. Watch the dropdown go over the top of the header instead of below it.
                </flux:text>
            </div>

            <div>
                <flux:heading size="lg">Custom select dropdown with margin overhangs</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    When a custom select dropdown has a margin applied, to narrow the dropdown a little incomparison to the trigger, the dropdown overhangs the trigger on the right side. This is
                    generally used so a user can see other inputs below the dropdown and be able to click on them.
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. Click on the User select.<br>
                    2. View the margin on the left of the dropdown and then see the overhang on the right.
                </flux:text>
            </div>

            <div>
                <flux:heading size="lg">Custom select dynamic placeholders don't update</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    When a custom select trigger has a dynamic placeholder, it doesn't update when the value is changed.
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. View the Post select below, it should say "Please select a user first"<br>
                    2. Now select a user in the User select.<br>
                    3. The Post select should now say "Choose post..." but it doesn't update.
                </flux:text>
            </div>

            <div>
                <flux:heading size="lg">Scroll and highlighting can do strange things</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    When you scroll down and highlight an item with the mouse, then try to use keyboard navigation, the highlighting can do strange things to the point where the highlighting stops and
                    the up and down arrows just scroll the results dropdown. Normally if you highlight an item with the mouse, then move the mouse out of the dropdown, and then press the up or down
                    arrow, then the first item gets highlighed.
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. Click on User select below.<br>
                    2. Scroll down and highlight an item with the mouse.<br>
                    3. Press either up or down arrow, to see nothing change.<br>
                    4. Press the same key again and everything starts working again.<br>
                    5. Scroll down some more and highlight another item with the mouse.<br>
                    6. Press either up or down arrow, to see nothing change.<br>
                    7. Move the mouse out of the dropdown and press the same key again, you should see the dropdown scroll instead of the highlight moving.
                </flux:text>
            </div>

            <div>
                <flux:heading size="lg">Highlighting with up arrow is inconsistent to autocomplete</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    If nothing is highlighted and you press the up arrow the first item is being highlighed. But the last item should be highlighted to make it consistent with the way the autocomplete
                    component works.
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. Click on User select below.<br>
                    2. Press the up arrow.<br>
                    3. The first item is currently being highlighted instead of last.
                </flux:text>
            </div>
        </flux:card.body>
    </flux:card>

    <div>
        <flux:text>User ID: {{ $userId }}</flux:text>
        <flux:text>Post ID: {{ $postId }}</flux:text>

        <flux:select wire:model.live="userId" label="User" custom>
            <flux:select.trigger placeholder="Choose user..." />

            <flux:select.options class="max-h-56 mx-2">
                @foreach ($this->users as $user)
                    <flux:select.option value="{{ $user->id }}">{{ $user->name }}</flux:select.option>
                @endforeach
            </flux:select.options>
        </flux:select>

        <flux:select wire:model.live="postId" label="Post" custom>
            <flux:select.trigger :placeholder="$userId ? 'Choose post...' : 'Please select a user first'" :disabled="!$userId" />

            <flux:select.options class="max-h-56 mx-2">
                @foreach ($this->posts as $post)
                    <flux:select.option value="{{ $post->id }}">{{ $post->title }}</flux:select.option>
                @endforeach
            </flux:select.options>
        </flux:select>
    </div>

    <flux:card>
        <flux:card.header>Some content below</flux:card.header>
        <flux:card.body class="h-96">Below content so the page is longer than where the custom selects are.</flux:card.body>
    </flux:card> --}}
</div>
