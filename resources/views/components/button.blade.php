@blaze

@props([
    'type' => 'button',
    'size' => 'md',
])

@php
$classes = [
    'relative items-center font-medium justify-center gap-2 whitespace-nowrap
    disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none
    justify-center text-sm rounded-lg ps-4 pe-4 inline-flex
    bg-white hover:bg-zinc-50 dark:bg-zinc-700 dark:hover:bg-zinc-600/75
    text-zinc-800 dark:text-white
    border border-zinc-200 hover:border-zinc-200 border-b-zinc-300/80 dark:border-zinc-600 dark:hover:border-zinc-600 shadow-xs
    [[data-flux-button-group]_&]:border-s-0 [:is([data-flux-button-group]>&:first-child,_[data-flux-button-group]_:first-child>&)]:border-s-[1px] *:transition-opacity [&[data-loading]>:not([data-flux-loading-indicator])]:opacity-0 [&[data-flux-loading]>:not([data-flux-loading-indicator])]:opacity-0 [&[data-loading]>[data-flux-loading-indicator]]:opacity-100 [&[data-flux-loading]>[data-flux-loading-indicator]]:opacity-100 data-loading:pointer-events-none data-flux-loading:pointer-events-none',
    match ($size) {
        'sm' => 'h-6',
        'md' => 'h-10',
        'lg' => 'h-14',
    },
];
@endphp

<button type="{{ $type }}" {{ $attributes->class($classes) }}>
    {{ $slot }}
</button>
