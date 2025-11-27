@blaze

@props([
    'name' => $attributes->whereStartsWith('wire:model')->first(),
])

<div>
    <div>{{ $slot }}</div>

    @imprint(['name' => $name])
    <x-blaze.error :name="$name" />
    @endimprint
</div>