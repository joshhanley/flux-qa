<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div>
    Test javascript2 {{ now() }}
    <button wire:click="$refresh">Refresh</button>
</div>

<script>
    console.log('testing javascriptwatch');
</script>
