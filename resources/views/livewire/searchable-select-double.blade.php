<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div>
    <flux:select variant="listbox" searchable>
      @foreach (range(0, 20) as $value)
        <flux:select.option :$value>{{ $value }}</flux:select.option>
      @endforeach
    </flux:select>

    {{-- <button class="ml-4" onclick="document.getElementById('16').scrollIntoView({ block: 'nearest' })">Scroll to 16</button>

    <div class="w-56 max-h-56 flex flex-col overflow-y-hidden" id="container">
        <input class="border mx-2" />

        <div class="overflow-y-auto border" id="options">
            <div class="bg-gray-100 hover:bg-red-300" id="1" onmouseenter="event.target.scrollIntoView({ block: 'nearest' })">1</div>
            <div class="bg-gray-100 hover:bg-red-300" id="2" onmouseenter="event.target.scrollIntoView({ block: 'nearest' })">2</div>
            <div class="bg-gray-100 hover:bg-red-300" id="3" onmouseenter="event.target.scrollIntoView({ block: 'nearest' })">3</div>
            <div class="bg-gray-100 hover:bg-red-300" id="4" onmouseenter="event.target.scrollIntoView({ block: 'nearest' })">4</div>
            <div class="bg-gray-100 hover:bg-red-300" id="5" onmouseenter="event.target.scrollIntoView({ block: 'nearest' })">5</div>
            <div class="bg-gray-100 hover:bg-red-300" id="6" onmouseenter="event.target.scrollIntoView({ block: 'nearest' })">6</div>
            <div class="bg-gray-100 hover:bg-red-300" id="7" onmouseenter="event.target.scrollIntoView({ block: 'nearest' })">7</div>
            <div class="bg-gray-100 hover:bg-red-300" id="8" onmouseenter="event.target.scrollIntoView({ block: 'nearest' })">8</div>
            <div class="bg-gray-100 hover:bg-red-300" id="9" onmouseenter="event.target.scrollIntoView({ block: 'nearest' })">9</div>
            <div class="bg-gray-100 hover:bg-red-300" id="10" onmouseenter="event.target.scrollIntoView({ block: 'nearest' })">10</div>
            <div class="bg-gray-100 hover:bg-red-300" id="11" onmouseenter="event.target.scrollIntoView({ block: 'nearest' })">11</div>
            <div class="bg-gray-100 hover:bg-red-300" id="12" onmouseenter="event.target.scrollIntoView({ block: 'nearest' })">12</div>
            <div class="bg-gray-100 hover:bg-red-300" id="13" onmouseenter="event.target.scrollIntoView({ block: 'nearest' })">13</div>
            <div class="bg-gray-100 hover:bg-red-300" id="14" onmouseenter="event.target.scrollIntoView({ block: 'nearest' })">14</div>
            <div class="bg-gray-100 hover:bg-red-300" id="15" onmouseenter="event.target.scrollIntoView({ block: 'nearest' })">15</div>
            <div class="bg-gray-100 hover:bg-red-300" id="16" onmouseenter="event.target.scrollIntoView({ block: 'nearest' })">16</div>
            <div class="bg-gray-100 hover:bg-red-300" id="17" onmouseenter="event.target.scrollIntoView({ block: 'nearest' })">17</div>
            <div class="bg-gray-100 hover:bg-red-300" id="18" onmouseenter="event.target.scrollIntoView({ block: 'nearest' })">18</div>
            <div class="bg-gray-100 hover:bg-red-300" id="19" onmouseenter="event.target.scrollIntoView({ block: 'nearest' })">19</div>
            <div class="bg-gray-100 hover:bg-red-300" id="20" onmouseenter="event.target.scrollIntoView({ block: 'nearest' })">20</div>
        </div>

    </div>

    <script>
        const container = document.getElementById('container');
        const options = document.getElementById('options');
        const option = document.getElementById('12');

        options.scrollTop = 9;
        option.style.border = '1px solid red';
        console.log('container', container.getBoundingClientRect());
        console.log('options', options.getBoundingClientRect());
        console.log('option', option.getBoundingClientRect());
        console.log('option.top', option.getBoundingClientRect().top);
        console.log('options.top', options.getBoundingClientRect().top);
        console.log('option.bottom', option.getBoundingClientRect().bottom);
        console.log('options.bottom', options.getBoundingClientRect().bottom);
        console.log('option top relative to options', option.getBoundingClientRect().top - options.getBoundingClientRect().top);
        console.log('option bottom relative to options', options.getBoundingClientRect().bottom - option.getBoundingClientRect().bottom);
        console.log('option bottom relative to container', (option.getBoundingClientRect().top - container.getBoundingClientRect().top) + option.getBoundingClientRect().height);


        function isVisible() {
            console.log('fullyVisible', option.getBoundingClientRect().top - options.getBoundingClientRect().top >= 0 && options.getBoundingClientRect().bottom - option.getBoundingClientRect().bottom >= 0)
        }
        console.log('fullyVisible', option.getBoundingClientRect().top - options.getBoundingClientRect().top >= 0 && options.getBoundingClientRect().bottom - option.getBoundingClientRect().bottom >= 0)
    </script> --}}
</div>
