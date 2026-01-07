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

    {{-- <div class="flex h-screen overflow-hidden">
        <nav class="w-16 bg-gray-200 flex-none flex flex-col items-center py-4">
            <div class="w-8 h-8 bg-gray-400 rounded-full mb-4"></div>
            <div class="w-8 h-8 bg-gray-400 rounded-full mb-4"></div>
        </nav>
        <main class="flex-1 overflow-y-auto p-8">
            <div class="flex justify-between">
                <h1 class="text-3xl font-bold mb-4">My Article</h1>
                <flux:dropdown>
                    <flux:button icon="adjustments-horizontal">
                        Options
                    </flux:button>
                    <flux:menu>
                        <flux:menu.item icon="plus">New post</flux:menu.item>
                    </flux:menu>
                    </flux:dropdown>
            </div>
            <p class="mb-4">Scroll down to see the center scrollbar...</p>
            <div class="h-[1500px] bg-gray-50 border border-dashed border-gray-300 rounded p-4">
                Article Body Content...
            </div>
        </main>
        <aside class="w-64 bg-gray-100 flex-none overflow-y-auto border-l border-gray-300">
            <div class="p-4">
                <h2 class="font-bold mb-4 sticky top-0 bg-gray-100 pb-2">Contents</h2>
                <ul class="text-sm space-y-3">
                    <li>1. Introduction</li>
                    <li class="h-[1800px] border-l-2 border-dashed border-gray-300 ml-2 pl-2 text-gray-400 flex items-end">
                        End of ToC
                    </li>
                </ul>
            </div>
        </aside>
    </div> --}}

    {{-- @persist('toast')
        <flux:toast.group>
            <flux:toast /> 
        </flux:toast.group>
    @endpersist --}}

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
