<?php

use Livewire\Component;

new class extends Component
{
    public function mount()
    {
        // throw new \Exception('Thrown from pages::dashboard mount');
    }
};
?>

<div>
    @php
        throw new \Exception('Thrown from pages::dashboard view');
    @endphp
</div>