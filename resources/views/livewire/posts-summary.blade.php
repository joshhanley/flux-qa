<?php

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {
    public $user;

    #[Computed]
    public function posts()
    {
        return $this->user->posts;
    }
}; ?>

<td>
    <p>Posts: {{ $this->posts->count() }}</p>
    <ul>
        @foreach ($this->posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
</td>
