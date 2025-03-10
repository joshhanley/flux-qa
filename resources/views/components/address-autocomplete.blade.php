@props([
    'name' => null,
])

<div class="relative" data-autocomplete-container>
    <flux:input
        x-data="{
            start: function(google) {
                let autocomplete = new google.maps.places.Autocomplete(
                    this.$el,
                    {
                        componentRestrictions: { country: ['us'] },
                        fields: ['address_components'],
                        types: ['address'],
                    }
                );
                
                autocomplete.addListener('place_changed', () => {
                    const place = autocomplete.getPlace()

                    this.$wire.{{ $attributes->wire('click')->value }}(place)
                })
            }
        }"
        x-init="if (window.googleIsLoaded) start(google)"
        x-on:google-maps-loaded.window="
            window.googleIsLoaded = true

            start(google)
        "
        x-on:focus="
            let container = $el.closest('[data-autocomplete-container]').querySelector('[data-autocomplete-inner-container]');
            let pac = document.querySelector('.pac-container');
            if (pac && container) {
                container.append(pac);
            }
        "
        {{ $attributes->whereDoesntStartWith('wire:click') }}
        />
    <div class="relative" data-autocomplete-inner-container wire:ignore></div>
</div>

@assets
<script async src="https://maps.googleapis.com/maps/api/js?key=&libraries=places&callback=initMap"></script>
@endassets

@assets
<script>
    function initMap() {
        window.dispatchEvent(new Event('google-maps-loaded'))
    }
</script>

<style>
    .pac-container {
        z-index: 10000;
        left: 0 !important;
        top: auto !important;
    }
</style>
@endassets