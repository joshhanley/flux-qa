@props([
    'name' => null,
])

@php
$message = $errors->first($name);
@endphp

<div {{ $attributes->class($message ? 'text-red-500 dark:text-red-400 mt-3 text-sm font-medium' : 'hidden') }}>
    <?php if ($message) : ?>
        {{ $message }}
    <?php endif; ?>
</div>
