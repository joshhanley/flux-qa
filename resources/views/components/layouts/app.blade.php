<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? str(request()->path())->headline() }}</title>
{{--
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
    </style> --}}

    <script>
        function preventScroll(e) {
          e.preventDefault()
        }

        document.addEventListener('wheel', preventScroll, { passive: false })
        document.addEventListener('touchmove', preventScroll, { passive: false })
        document.addEventListener('keydown', e => {
          if (['ArrowUp','ArrowDown','PageUp','PageDown','Home','End',' '].includes(e.key)) {
            e.preventDefault()
          }
        })
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        window.localStorage.setItem('flux.appearance', '{{ auth()->user()->color_scheme ?? 'system' }}')
    </script>
    @fluxAppearance()
</head>
<body class="min-h-screen bg-white overflow-hidden dark:bg-zinc-800">
    {{ $slot }}

    @fluxScripts()

    <flux:toast />
</body>

</html>
