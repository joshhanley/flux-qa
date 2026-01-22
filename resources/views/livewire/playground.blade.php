
<?php

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    public ?User $user;

    public string $test = 'test';

    public function delete(): void
     {
        ray('before delete v4');
         $this->user->delete();
        ray('after delete v4');

         //$this->user = null;

        // it throws a 404 at this point, even without the redirect

         //$this->redirect('/');
     }
};
?>

<div>
    Edit{{ $user?->name }}
    
    {{--  If you remove this line it works fine --}}
    <livewire:child wire:model='test' />

    <button wire:click="delete">Delete</button>
</div>
