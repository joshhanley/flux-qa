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

<flux:main class="w-96 space-y-4 ">
<flux:table class="w-92 border">
    <flux:columns>
        <flux:column>Column</flux:column>
    </flux:columns>

    <flux:rows>
        @php
            $items = [];
            $items = [1];
        @endphp
        @foreach ($items as $item)
            <flux:row>
                <flux:cell>
                {{ $item }}
                </flux:cell>
            </flux:row>
        @endforeach
    </flux:rows>
</flux:table>
<flux:table class="w-92 border">
    <flux:columns>
        <flux:column>Column</flux:column>
    </flux:columns>

    <flux:rows></flux:rows>
</flux:table>
<flux:table class="w-92 border">
    <flux:columns>
        <flux:column>Column</flux:column>
    </flux:columns>

    <flux:rows class="border-t-3!">
        @php
            $items = [];
            // $items = [1];
        @endphp
        @foreach ($items as $item)
            <flux:row>
                <flux:cell>
                {{ $item }}
                </flux:cell>
            </flux:row>
        @endforeach
    </flux:rows>
</flux:table>
</flux:main>
