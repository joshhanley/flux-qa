<?php

use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;

    public $sortBy;
    public $sortDirection = 'asc';

    #[Computed]
    public function users()
    {
        return User::query()
            ->when($this->sortBy, fn($query) => $query->orderBy($this->sortBy, $this->sortDirection))
            ->paginate();
    }

    #[Computed]
    public function posts()
    {
        return Post::with(['user'])->simplePaginate(pageName: 'posts');
    }

    public function edit(User $user)
    {
        dump('edit', $user->toArray());
    }

    public function delete(User $user)
    {
        dump('delete', $user->toArray());
    }

    public function sort($column)
    {
        if ($this->sortBy === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $column;
            $this->sortDirection = 'asc';
        }
    }
};

?>

<div class="space-y-4">
    {{-- <flux:card>
        <flux:card.header class="border-b bg-gray-50">Use this page to test the following issues</flux:card.header>
        <flux:card.body class="divide-y">
            <div>
                <flux:heading size="lg">Separator with word margin wonky</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    If you add a margin to the separator with words it doesn't look right. The separator lines are pushed down but not the text, instead of the whole lot pushed down.
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. Have a look at the "OR" separator between the tables, it has mt-4 applied. <br />
                </flux:text>
            </div>
        </flux:card.body>
    </flux:card>

    <flux:heading size="lg">Users</flux:heading>

    <flux:table :paginate="$this - > users">
        <flux:pagination :paginator="$this - > users" />
        <flux:columns>
            <flux:column wire:click="sort('name')" sortable :sorted="$this - > sortBy === 'name'" :direction="$this - > sortDirection">Name</flux:column>
            <flux:column wire:click="sort('email')" sortable :sorted="$this - > sortBy === 'email'" :direction="$this - > sortDirection">Email</flux:column>
            <flux:column>Is verified?</flux:column>
            <flux:column>Created At</flux:column>
            <flux:column>Updated At</flux:column>
            <flux:column>Actions</flux:column>
        </flux:columns>

        <flux:rows>
            @foreach ($this->users as $user)
                <flux:row wire:key="$user->id">
                    <flux:cell>{{ $user->name }}</flux:cell>
                    <flux:cell>{{ $user->email }}</flux:cell>
                    <flux:cell>
                        @if ($user->email_verified_at)
                            <flux:badge color="green">Yes</flux:badge>
                        @else
                            <flux:badge color="red">No</flux:badge>
                        @endif
                    </flux:cell>
                    <flux:cell>{{ $user->created_at->diffForHumans() }}</flux:cell>
                    <flux:cell>{{ $user->updated_at->diffForHumans() }}</flux:cell>
                    <flux:cell>
                        <flux:dropdown position="bottom end">
                            <flux:button variant="ghost" size="sm" icon="ellipsis-horizontal" inset="top bottom"></flux:button>

                            <flux:menu>
                                <flux:menu.item wire:click="edit({{ $user->id }})">Edit</flux:menu.item>
                                <flux:menu.item wire:click="delete({{ $user->id }})">Delete</flux:menu.item>
                            </flux:menu>
                        </flux:dropdown>
                    </flux:cell>
                </flux:row>
            @endforeach
        </flux:rows>
    </flux:table>

    <flux:separator text="OR" class="mt-4" />

    <flux:heading class="mt-12" size="lg">Posts</flux:heading>

    <flux:table :paginate="$this - > posts">
        <flux:pagination :paginator="$this - > posts" />
        <flux:columns>
            <flux:column>ID</flux:column>
            <flux:column>Title</flux:column>
            <flux:column>Author</flux:column>
            <flux:column>Created At</flux:column>
            <flux:column>Updated At</flux:column>
            <flux:column>Actions</flux:column>
        </flux:columns>

        <flux:rows>
            @foreach ($this->posts as $post)
                <flux:row :key="$post - > id">
                    <flux:cell>{{ $post->id }}</flux:cell>
                    <flux:cell>{{ $post->title }}</flux:cell>
                    <flux:cell>{{ $post->user->name }}</flux:cell>
                    <flux:cell>
                        <flux:dropdown position="bottom end">
                            <flux:button variant="ghost" size="sm" icon="ellipsis-horizontal" inset="top bottom"></flux:button>

                            <flux:menu>
                                <flux:menu.item wire:click="edit({{ $post->id }})">Edit</flux:menu.item>
                                <flux:menu.item wire:click="delete({{ $post->id }})">Delete</flux:menu.item>
                            </flux:menu>
                        </flux:dropdown>
                    </flux:cell>
                </flux:row>
            @endforeach
        </flux:rows>
    </flux:table> --}}
</div>
