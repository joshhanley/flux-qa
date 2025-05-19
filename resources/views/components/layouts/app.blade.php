<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? str(request()->path())->headline() }}</title>

    {{-- <style>
        ::-webkit-scrollbar {
          /*width: 12px;*/
          background-color: white; /* track */
        }

        ::-webkit-scrollbar-thumb {
          background-color: #ccc; /* scrollbar itself */
          border-radius: 6px;
        }
        
    </style> --}}

    {{-- ::-webkit-scrollbar {
      -webkit-appearance: none;
      width: 7px;
    }

    ::-webkit-scrollbar-thumb {
      border-radius: 4px;
      background-color: rgba(0, 0, 0, .5);
      box-shadow: 0 0 1px rgba(255, 255, 255, .5);
    } --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        window.localStorage.setItem('flux.appearance', '{{ auth()->user()->color_scheme ?? 'system' }}')
    </script>
    @fluxAppearance()
    {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
    {{-- <livewire:styles /> --}}
</head>
<body x-data class="min-h-screen bg-white dark:bg-zinc-900">
    {{ $slot }}

    @fluxScripts()

    <flux:toast />
    {{-- <x-toast /> --}}
    {{-- <livewire:scripts /> --}}
</body>

</html>
