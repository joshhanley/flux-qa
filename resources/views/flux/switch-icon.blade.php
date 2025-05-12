@props([
    'name' => null,
    'align' => 'right',
    'onIcon' => null,
    'offIcon' => null,
])

@php
// We only want to show the name attribute it has been set manually
// but not if it has been set from the `wire:model` attribute...
$showName = isset($name);
if (! isset($name)) {
    $name = $attributes->whereStartsWith('wire:model')->first();
}

$classes = Flux::classes()
    ->add('group relative inline-flex items-center outline-offset-2')
    ->add($onIcon || $offIcon ? 'h-7' : 'h-5')
    ->add($onIcon || $offIcon ? 'w-12 min-w-12' : 'w-8 min-w-8')
    ->add('rounded-full')
    ->add('transition')
    ->add('bg-zinc-800/15 [&[disabled]]:opacity-50 dark:bg-transparent dark:border dark:border-white/20 dark:[&[disabled]]:border-white/10')
    ->add('[print-color-adjust:exact]')
    ->add([
        'data-checked:bg-(--color-accent)',
        'data-checked:border-0',
    ])
    ;

$indicatorClasses = Flux::classes()
    ->add($onIcon || $offIcon ? 'size-5.5' : 'size-3.5')
    ->add('rounded-full')
    ->add('transition translate-x-[3px] dark:translate-x-[2px] rtl:-translate-x-[3px] dark:rtl:-translate-x-[2px]')
    ->add('bg-white')
    ->add($onIcon || $offIcon ? 'flex items-center justify-center' : '')
    ->add([
        $onIcon || $offIcon
            ? 'group-data-checked:translate-x-[23px] rtl:group-data-checked:-translate-x-[23px]'
            : 'group-data-checked:translate-x-[15px] rtl:group-data-checked:-translate-x-[15px]',
        'group-data-checked:bg-(--color-accent-foreground)',
    ]);
@endphp

@if ($align === 'left' || $align === 'start')
    <flux:with-inline-field :$attributes>
        <ui-switch {{ $attributes->class($classes) }} @if($showName) name="{{ $name }}" @endif data-flux-control data-flux-switch>
            <span class="{{ \Illuminate\Support\Arr::toCssClasses($indicatorClasses) }}"></span>
        </ui-switch>
    </flux:with-inline-field>
@else
    <flux:with-reversed-inline-field :$attributes>
        <ui-switch {{ $attributes->class($classes) }} @if($showName) name="{{ $name }}" @endif data-flux-control data-flux-switch>
            <span class="{{ \Illuminate\Support\Arr::toCssClasses($indicatorClasses) }}">
                @if ($offIcon)
                    <flux:icon :name="$offIcon" variant="mini" class="size-4 group-data-checked:hidden block text-zinc-300 dark:text-zinc-600" />
                @endif

                @if ($onIcon)
                    <flux:icon :name="$onIcon" variant="mini" class="size-4 group-data-checked:block hidden text-(--color-accent) dark:text-(--color-accent)" />
                @endif

            </span>
        </ui-switch>
    </flux:with-reversed-inline-field>
@endif
