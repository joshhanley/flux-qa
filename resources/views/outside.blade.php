<x-layouts.app>
    Test
    {{-- <flux:editor label="Content" /> --}}

    <div>
        <flux:checkbox
            name="test"
            :checked="true"
            label="some text"
        />
    </div>

    @if (true)
        <button>Click me</button>
    @endif
</x-layouts.app>
