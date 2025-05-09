<?php

use App\Models\User;
use Livewire\Volt\Component;

new class extends Component {
    public $prepend = false;
    public $initial = true;

    #[\Livewire\Attributes\Computed]
    public function users()
    {
        return User::with(['posts' => function($query) {
            $query->limit(5);
        }])->limit(4000)->get();
    }

    public function dehydrate()
    {
        $this->initial = false;
    }
};
?>

<div>
    <button wire:click="$toggle('prepend')">Prepend</button>
    <button wire:click="$refresh">Refresh</button>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        @foreach ($this->users as $user)
            <tr wire:key="{{ $user->id }}">
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <livewire:posts-summary :user="$user" />
            </tr>
        @endforeach
    </table>
</div>
