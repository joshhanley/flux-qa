<?php

use Livewire\Component;

new class extends Component {
    //
} ?>

<div class="p-4 max-w-96">
    <markdown-editor class="p-0 block border rounded-md overflow-hidden">
        <markdown-toolbar class="flex items-center justify-end border-b border-gray-300 bg-gray-100">
            <markdown-bold class="size-8 inline-flex items-center justify-center rounded-md hover:bg-gray-200">B</markdown-bold>
        </markdown-toolbar>

        <textarea rows="10" class="p-4 block w-full"></textarea>
    </markdown-editor>
</div>
