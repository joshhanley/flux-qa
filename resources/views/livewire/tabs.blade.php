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
                <flux:heading size="lg">Checkbox/radio disabled on one disables all</flux:heading>

                <flux:subheading size="lg" class="font-medium">Issue</flux:subheading>

                <flux:text>
                    If you put disabled on a checkbox or radio button in a group, then all get the disabled style but only the one is disabled.
                </flux:text>

                <flux:subheading size="lg" class="font-medium">Instructions</flux:subheading>

                <flux:text>
                    1. Have a look at the Gender field below, only Male is disabled but all look disabled. <br/>
                    2. Female and Other still work just look disabled.
                </flux:text>
            </div>
        </flux:card.body>
    </flux:card> --}}

    <flux:tabs>
        <flux:tab.group>
            <flux:tab panel="users">Users</flux:tab>
            <flux:tab panel="posts">Posts</flux:tab>
        </flux:tab.group>

        <flux:tab.panel name="users">
            <flux:heading size="lg">Users</flux:heading>

            <flux:table :paginate="$this - > users">
                <flux:table.columns>
                    <flux:table.column wire:click="sort('name')" sortable :sorted="$this - > sortBy === 'name'" :direction="$this - > sortDirection">Name</flux:table.column>
                    <flux:table.column wire:click="sort('email')" sortable :sorted="$this - > sortBy === 'email'" :direction="$this - > sortDirection">Email</flux:table.column>
                    <flux:table.column>Is verified?</flux:table.column>
                    <flux:table.column>Created At</flux:table.column>
                    <flux:table.column>Updated At</flux:table.column>
                    <flux:table.column>Actions</flux:table.column>
                </flux:table.columns>

                <flux:table.rows>
                    @foreach ($this->users as $user)
                        <flux:table.row wire:key="$user->id">
                            <flux:table.cell>{{ $user->name }}</flux:table.cell>
                            <flux:table.cell>{{ $user->email }}</flux:table.cell>
                            <flux:table.cell>
                                @if ($user->email_verified_at)
                                    <flux:badge color="green">Yes</flux:badge>
                                @else
                                    <flux:badge color="red">No</flux:badge>
                                @endif
                            </flux:table.cell>
                            <flux:table.cell>{{ $user->created_at->diffForHumans() }}</flux:table.cell>
                            <flux:table.cell>{{ $user->updated_at->diffForHumans() }}</flux:table.cell>
                            <flux:table.cell>
                                <flux:dropdown position="bottom end">
                                    <flux:button variant="ghost" size="sm" icon="ellipsis-horizontal" inset="top bottom"></flux:button>

                                    <flux:menu>
                                        <flux:menu.item wire:click="edit({{ $user->id }})">Edit</flux:menu.item>
                                        <flux:menu.item wire:click="delete({{ $user->id }})">Delete</flux:menu.item>
                                    </flux:menu>
                                </flux:dropdown>
                            </flux:table.cell>
                        </flux:table.row>
                    @endforeach
                </flux:table.rows>
            </flux:table>
        </flux:tab.panel>

        <flux:tab.panel name="posts">
            <flux:heading size="lg">Posts</flux:heading>

            <flux:table :paginate="$this - > posts">
                <flux:table.columns>
                    <flux:table.column>ID</flux:table.column>
                    <flux:table.column>Title</flux:table.column>
                    <flux:table.column>Author</flux:table.column>
                    <flux:table.column>Created At</flux:table.column>
                    <flux:table.column>Updated At</flux:table.column>
                    <flux:table.column>Actions</flux:table.column>
                </flux:table.columns>

                <flux:table.rows>
                    @foreach ($this->posts as $post)
                        <flux:table.row :key="$post - > id">
                            <flux:table.cell>{{ $post->id }}</flux:table.cell>
                            <flux:table.cell>{{ $post->title }}</flux:table.cell>
                            <flux:table.cell>{{ $post->user->name }}</flux:table.cell>
                            <flux:table.cell>
                                <flux:dropdown position="bottom end">
                                    <flux:button variant="ghost" size="sm" icon="ellipsis-horizontal" inset="top bottom"></flux:button>

                                    <flux:menu>
                                        <flux:menu.item wire:click="edit({{ $post->id }})">Edit</flux:menu.item>
                                        <flux:menu.item wire:click="delete({{ $post->id }})">Delete</flux:menu.item>
                                    </flux:menu>
                                </flux:dropdown>
                            </flux:table.cell>
                        </flux:table.row>
                    @endforeach
                </flux:table.rows>
            </flux:table>
        </flux:tab.panel>
    </flux:tabs>
</div>
