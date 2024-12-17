@props(['test'])

<flux:button icon="trash" wire:click.stop="{{ $test }}" />