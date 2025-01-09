<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div x-on:scroll.window="console.log($event)">
    <div class="h-screen">Scroll down...</div>
    <div class="h-screen">Scroll down...</div>

    {{-- <button id="btn">Toggle</button>
    <div popover="manual" id="p">Hi</div>
    <script>
    btn.onclick = () => {
        let unlock = () => {};

        if (p.matches(':popover-open')) {
            p.hidePopover();
            unlock()
        } else {
            p.showPopover();
            unlock = chain(
                setStyle(document.documentElement, 'paddingRight', `${window.innerWidth - document.documentElement.clientWidth}px`),
                setStyle(document.documentElement, 'overflow', 'hidden'),
            )
        }
    }

    function setStyle(element, style, value) {
        let currentValue = element.style[style];

        element.style[style] = value;

        return () => {
            element.style[style] = currentValue;
        }
    }

    function chain(...fns) {
        return (...args) => {
            for (let fn of fns) {
                fn(...args)
            }
        }
    }
    </script> --}}

    <flux:modal.trigger name="edit-profile">
        <flux:button x-on:click="console.log('open')" variant="primary">Edit profile</flux:button>
    </flux:modal.trigger>

    <flux:modal name="edit-profile" variant="flyout">
        <flux:select variant="listbox" searchable class="mt-6">
            <flux:option value="all">All Changes</flux:option>
            <flux:option value="active">Active Items</flux:option>
            <flux:option value="created">Added Items</flux:option>
            <flux:option value="deleted1">Deleted Items</flux:option>
            <flux:option value="deleted2">Deleted Items</flux:option>
        </flux:select>
    </flux:modal>
</div>

@script
<script>
    window.addEventListener('scroll', function(e) {
        console.log('scrolling', e);
    });
</script>
@endscript