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

    <script type="module">
        //import Link from 'https://cdn.jsdelivr.net/npm/@tiptap/extension-link@2.11.7/+esm'
        //import Youtube from 'https://cdn.jsdelivr.net/npm/@tiptap/extension-youtube@2.11.7/+esm'
        /*
        import Image from 'https://cdn.jsdelivr.net/npm/@tiptap/extension-image@2.11.7/+esm'

        document.addEventListener('flux:editor', (e) => {
            e.detail.registerExtension(Image)

            e.detail.initializeToolbarButton((editor, toolbar, setActiveState) => {
                if (toolbar.querySelector('[data-editor="image"]')) {
                    toolbar.querySelector('[data-editor="image:url"]')?.addEventListener('keydown', e => {
                        if (['ArrowLeft', 'ArrowRight'].includes(e.key) || /^[a-zA-Z0-9]$/.test(e.key)) {
                            e.stopPropagation();
                        }
                    })

                    toolbar.querySelector('[data-editor="image:url"]')?.addEventListener('input', e => e.stopPropagation())
                    toolbar.querySelector('[data-editor="image:url"]')?.addEventListener('change', e => e.stopPropagation())

                    let insertImage = () => {
                        let url = toolbar.querySelector('[data-editor="image:url"]')?.value?.trim();

                        if (!url) return;

                        editor.chain().focus().setImage({ src: url }).run();

                        if (toolbar.querySelector('[data-editor="image:url"]')) {
                            toolbar.querySelector('[data-editor="image:url"]').value = '';
                        }
                    }

                    toolbar.querySelector('[data-editor="image:insert"]')?.addEventListener('click', insertImage)
                    toolbar.querySelector('[data-editor="image:url"]')?.addEventListener('keydown', e => ['Enter'].includes(e.key) && insertImage())
                    
                }

                setActiveState(() => {
                    let imageInput = toolbar.querySelector('[data-editor="image:url"]')

                    if (imageInput) {
                        let imageButton = toolbar.querySelector('[data-editor="image"] [data-match-target]')

                        if (editor.isActive('image')) {
                            imageButton && imageButton.setAttribute('data-match', '')

                            let attrs = editor.getAttributes('image')
                            imageInput.value = attrs.src || ''
                        } else {
                            imageButton && imageButton.removeAttribute('data-match')
                            imageInput.value = ''
                        }
                    }
                })
            })*/

            /* e.detail.initializeToolbarActiveState((editor, toolbar) => {
                let imageInput = toolbar.querySelector('[data-editor="image:url"]')

                if (imageInput) {
                    let imageButton = toolbar.querySelector('[data-editor="image"] [data-match-target]')

                    if (editor.isActive('image')) {
                        imageButton && imageButton.setAttribute('data-match', '')

                        let attrs = editor.getAttributes('image')
                        imageInput.value = attrs.src || ''
                    } else {
                        imageButton && imageButton.removeAttribute('data-match')
                        imageInput.value = ''
                    }
                }
            })*/
            /*e.detail.registerExtension(
                Youtube.configure({
                    controls: false,
                    nocookie: true,
                }),
            )

            e.detail.registerExtension(Link.configure({
                HTMLAttributes: {
                  class: 'my-custom-class',
                },
            }))*/
        //})
    </script>
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
