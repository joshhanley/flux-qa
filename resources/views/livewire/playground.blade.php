<?php

use Livewire\Volt\Component;

new class extends Component {
    //
};
?>

<div>
    <x-test :model="new \App\Models\User()" :prefix="'primary-data.permissions'" :parameter="'permission'" />
</div>
