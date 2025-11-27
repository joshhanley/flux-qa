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
<flux:sidebar sticky collapsible class="bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700">
    <flux:sidebar.header>
        <flux:sidebar.brand
                href="#"
                logo="https://fluxui.dev/img/demo/logo.png"
                logo:dark="https://fluxui.dev/img/demo/dark-mode-logo.png"
                name="Acme Inc."
        />

        <flux:sidebar.collapse class="in-data-flux-sidebar-on-desktop:not-in-data-flux-sidebar-collapsed-desktop:-mr-2" />
    </flux:sidebar.header>

    <flux:sidebar.nav>
        <flux:sidebar.item icon="home" :href="route('dashboard')" wire:navigate.hover>Dashboard</flux:sidebar.item>
        <flux:sidebar.item icon="play-circle" :href="route('playground')" wire:navigate.hover>Playground</flux:sidebar.item>

    </flux:sidebar.nav>
</flux:sidebar>

<flux:main>
    {{ $slot }}
</flux:main>

    @persist('toast')
        <flux:toast.group>
            <flux:toast /> 
        </flux:toast.group>
    @endpersist

    {{-- @persist('toast')
    <flux:toast /> 
    @endpersist --}}
    
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
