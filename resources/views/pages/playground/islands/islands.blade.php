<?php

use Livewire\Component;

new class extends Component {
    public $count = 0;

    public function increment() {
        $this->count++;
    }
};

?>

<div class="mx-auto max-w-md">
    Nested playground island file
</div>