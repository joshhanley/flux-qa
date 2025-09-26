<?php

use Livewire\Component;

new class extends Component {
    public function mount() {
        sleep(2);
    }
} ?>
@placeholder
    <div>Nested playground placeholder content</div>
@endplaceholder
<div>
    @island
        @placeholder
            <div>Island Placeholder Content</div>
        @endplaceholder
        <div>Nested playground island content</div>
    @endisland
</div>
