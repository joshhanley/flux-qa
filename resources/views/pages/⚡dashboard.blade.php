<?php

use Livewire\Component;

new class extends Component
{
    public function render()
    {
        return $this->view()
            ->layout('layouts::app-data-current'); 
    }
};
?>

<div>
    Dashboard
    <div class="h-[1000px]"></div>
    <flux:link href="/playground" wire:navigate>Playground</flux:link>
</div>