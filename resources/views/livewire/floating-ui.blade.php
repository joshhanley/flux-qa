<?php

use Livewire\Volt\Component;

new class extends Component {
    //
};
?>

<div>
    <style>
        #tooltip {
            overflow-y: auto;
            display: none;
            width: max-content;
            position: absolute;
            top: 0;
            left: 0;
            background: #222;
            color: white;
            font-weight: bold;
            padding: 5px;
            border-radius: 4px;
            font-size: 90%;
        }
    </style>
    <div class="h-[1500px]"></div>
    {{-- <flux:dropdown>
        <flux:button icon-trailing="chevron-down">Options</flux:button>

        <flux:menu>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
            <flux:menu.item icon="plus">New post</flux:menu.item>
        </flux:menu>
    </flux:dropdown> --}}

    <flux:button id="button" aria-describedby="tooltip">
        My button
    </flux:button>
    <div id="tooltip" role="tooltip">
        <p>My tooltip</p>
        <p>My tooltip</p>
        <p>My tooltip</p>
        <p>My tooltip</p>
        <p>My tooltip</p>
        <p>My tooltip</p>
        <p>My tooltip</p>
        <p>My tooltip</p>
        <p>My tooltip</p>
        <p>My tooltip</p>
        <p>My tooltip</p>
        <p>My tooltip</p>
        <p>My tooltip</p>
        <p>My tooltip</p>
        <p>My tooltip</p>
        <p>My tooltip</p>
    </div>

    <div class="h-[500px]"></div>

    <script type="module">
        import {
            autoUpdate,
            computePosition,
            offset,
            flip,
            shift,
            size,
        } from 'https://cdn.jsdelivr.net/npm/@floating-ui/dom@1.6.12/+esm';

        const button = document.querySelector('#button');
        const tooltip = document.querySelector('#tooltip');

        function update() {
            computePosition(button, tooltip, {
                placement: 'bottom-start',
                middleware: [
                    offset({
                        mainAxis: 5,
                        //crossAxis: 15,
                        alignmentAxis: 15,
                    }),
                    flip(),
                    shift({ padding: 5, }),
                    size({
                      padding: 5,
                      apply({availableWidth, availableHeight, elements, rects}) {
                        // Change styles, e.g.
                        Object.assign(elements.floating.style, {
                          maxWidth: `${Math.max(0, availableWidth)}px`,
                          //maxHeight: `${Math.max(0, availableHeight)}px`,
                          minWidth: `${rects.reference.width}px`,
                        });

                        elements.floating.style.maxHeight =
                            availableHeight >= elements.floating.scrollHeight
                                ? ''
                                : `${availableHeight}px`;
                      },
                    }),
                ],
            }).then(({x, y}) => {
                Object.assign(tooltip.style, {
                    left: `${x}px`,
                    top: `${y}px`,
                });
            });
        }

        let cleanup = autoUpdate(button, tooltip, update);

        function showTooltip() {
          tooltip.style.display = 'block';
          update();
        }

        function hideTooltip() {
          tooltip.style.display = '';
        }

        let show = false;

        button.addEventListener('click', () => {
          show = !show;
          if (show) {
            showTooltip();
          } else {
            hideTooltip();
            cleanup();
          }
        });
    </script>
</div>
