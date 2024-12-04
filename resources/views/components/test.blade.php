@props([
    'model' => null,
    'prefix' => '',
    'parameter' => '',
])

<div class="flex gap-2">
    <div class="flex-auto">
        <flux:button
            wire:key="viewModelBtn_{{ Str::ulid() }}"
            id="viewModelBtn_{{ Str::ulid() }}"
            href="{{ route('home') }}"
            variant="primary"
            size="xs"
            icon="magnifying-glass"
            tooltip="{{ __('view') }}"
            class="w-full"
        />
    </div>

    <div class="flex-auto">
        <flux:button
            wire:key="removeModelBtn_{{ Str::ulid() }}"
            wire:click="removeModel('{{ Str::ulid() }}')"
            wire:confirm="{{ Str::ucfirst(__('are you sure?')) }}"
            wire:target="removeModel('{{ Str::ulid() }}')"
            id="removeModelBtn_{{ Str::ulid() }}"
            variant="danger"
            size="xs"
            icon="trash"
            tooltip="{{ __('delete') }}"
            class="w-full"
        />
    </div>
</div>