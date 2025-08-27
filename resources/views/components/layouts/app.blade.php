<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? str(request()->path())->headline() }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        window.localStorage.setItem('flux.appearance', '{{ auth()->user()->color_scheme ?? 'system' }}')
    </script>

    @fluxAppearance()

    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
</head>
<body x-data class="min-h-screen bg-white dark:bg-zinc-900">
    {{ $slot }}

    @persist('toast')
        {{-- <flux:toast.group> --}}
            <flux:toast /> 
        {{-- </flux:toast.group> --}}
    @endpersist

    {{-- @persist('toast') --}}
    {{-- <flux:toast />  --}}
    {{-- @endpersist --}}
    
    {{-- <script>
    document.addEventListener('livewire:initialized', () => {
            window.Flux.toast({
                heading: 'Changes saved',
                text: 'Your changes have been saved.',
                variant: 'success',
            })
        })
    </script> --}}

    @fluxScripts()
</body>

</html>
