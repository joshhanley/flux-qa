<?php

use Livewire\Attributes\On;
use Livewire\Volt\Component;

new class extends Component {
    #[On('openModal')]
    public function openModal($title, $description, $component)
    {
        dd('openModal', $title, $description, $component);
    }
};

?>

<div>
    
</div>
