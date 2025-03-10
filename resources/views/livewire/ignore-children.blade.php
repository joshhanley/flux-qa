<?php

    use Livewire\Volt\Component;

    new class extends Component {
        public $value = 'Test';

        public function changeValue()
        {
            $this->value = 'New Value';
        }
    };
?>

<div>
    <button wire:click="changeValue">Change Value</button>
    <div wire:ignore.children value="{{ $value }}" random="{{ $value }}" id="value">
    </div>
</div>

@script
    <script>
        let valueElement = document.getElementById('value');

        let newElement = document.createElement('div');

        newElement.innerHTML = valueElement.getAttribute('value');

        const observer = new MutationObserver(mutations => {
          mutations.forEach(mutation => {
            console.log(mutation);
            if (mutation.attributeName === 'value') {
              console.log('Value changed to:', valueElement.getAttribute('value'));
              newElement.innerHTML = valueElement.getAttribute('value');
            }
          });
        });

        observer.observe(valueElement, { attributeFilter: ['value'] });

        valueElement.appendChild(newElement);
    </script>
@endscript
