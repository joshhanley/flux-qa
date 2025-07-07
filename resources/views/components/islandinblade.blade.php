<div>
    <p>Island in blade</p>

    @island('bob2')
        <p>Island in blade content</p>

        <p>Island in blade time: {{ now() }}</p>

        <button wire:click="$refresh" x-on:click="$wire.$island('bob2')">Island in blade refresh</button>
    @endisland
</div>