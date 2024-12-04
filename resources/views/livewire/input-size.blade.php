<?php

use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new class extends Component {
    //
};

?>

<flux:main class="">
    <flux:input name="password" type="password" label="{{ __('Password') }}" required autocomplete="current-password" viewable />


    <flux:button icon-trailing="home" size="xs"></flux:button>
    <flux:button icon-trailing="home" size="sm"></flux:button>
    {{-- <flux:button icon-trailing="home" size="md"></flux:button> --}}
    {{-- <flux:button icon-trailing="home" size="lg"></flux:button> --}}

    <div>
        <flux:checkbox wire:model="isChecked" label="Checkbox" />
        <flux:switch wire:model="isSwitched" label="Switch" />
    </div>
</flux:main>
