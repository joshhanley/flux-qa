<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? str(request()->path())->headline() }}</title>

    <style>
        ::-webkit-scrollbar {
          -webkit-appearance: none;
          width: 7px;
        }

        ::-webkit-scrollbar-thumb {
          border-radius: 4px;
          background-color: rgba(0, 0, 0, .5);
          box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        }
    </style>
    <script>
        window.fluxInitialAppearance = '{{ $theme ?? 'light' }}';
    </script>
    @fluxStyles()
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- @fluxDark() --}}
</head>
{{-- @php($theme = 'system') --}}
<body class="min-h-screen bg-white dark:bg-zinc-800 p-4">
    {{-- <div x-init="$flux.appearance = '{{ $theme ?? 'light' }}'"></div> --}}
    {{ $slot }}

    @fluxScripts()
    <flux:toast />
</body>

</html>
