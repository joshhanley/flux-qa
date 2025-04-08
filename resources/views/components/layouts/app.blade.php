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

    {{-- <script type="module">
        import Link from 'https://cdn.jsdelivr.net/npm/@tiptap/extension-link@2.11.7/+esm'
        import Youtube from 'https://cdn.jsdelivr.net/npm/@tiptap/extension-youtube@2.11.7/+esm'

        document.addEventListener('flux:editor', (e) => {
            e.detail.registerExtension(
                Youtube.configure({
                    controls: false,
                    nocookie: true,
                }),
            )

            e.detail.registerExtension(Link.configure({
                HTMLAttributes: {
                  class: 'my-custom-class',
                },
            }))
        })
    </script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        window.localStorage.setItem('flux.appearance', '{{ auth()->user()->color_scheme ?? 'system' }}')
    </script>
    @fluxAppearance()
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800 p-4">
    {{ $slot }}

    @fluxScripts()

    <flux:toast />
</body>

</html>
