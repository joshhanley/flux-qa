
<?php

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    public User $user;
};
?>

<div>
a
    <livewire:playground :$user />
</div>
