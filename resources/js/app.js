// import '../../vendor/livewire/flux/dist/flux.min.js';
// import '../../vendor/livewire/flux-pro/dist/flux.js';

// import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';

// console.log('start')

// window.Alpine.__fromLivewire = true

// console.log('startLivewire-app.js')
// Livewire.start()

// document.addEventListener('DOMContentLoaded', () => {
//     console.log('DOMContentLoaded-app.js')
//     Livewire.start()
// })

// import Link from 'https://esm.sh/@tiptap/extension-link@2.11.7'
// import Youtube from 'https://esm.sh/@tiptap/extension-youtube@2.11.7'

// import '../../vendor/livewire/flux-pro/dist/editor.js';
// import '../../vendor/livewire/flux-pro/dist/flux.js';
// import Link from '@tiptap/extension-link'
// import Youtube from '@tiptap/extension-youtube'

// document.addEventListener('flux:editor', (e) => {
//     console.log('flux:editor', e)
//     e.detail.registerExtension(
//         Youtube.configure({
//             controls: false,
//             nocookie: true,
//         }),
//     )

//     e.detail.registerExtension(Link.configure({
//         HTMLAttributes: {
//           class: 'my-custom-class',
//         },
//     }))
// })


import Image from '@tiptap/extension-image'
import FileHandler from '@tiptap-pro/extension-file-handler'

document.addEventListener('flux:editor', (e) => {
    e.detail.registerExtension(Image.extend({
        addAttributes() {
            return {
                ...this.parent?.(),
                'data-upload-id': {
                    default: undefined,
                },
            }
        },
    }))

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
    })
})

document.addEventListener('flux:editor', (e) => {
    e.detail.registerExtension(FileHandler.configure({
        // allowedMimeTypes: [],
        onPaste: (editor, files, htmlContent) => {
            console.log('onPaste', editor.options.element, files, htmlContent)

            let editorEl = editor.options.element

            if (!editorEl) return;

            // If there is htmlContent, stop manual insertion & let other extensions handle insertion via inputRule
            // you could extract the pasted file from this url string and upload it to a server for example...
            if (htmlContent) return

            let component = editorEl.closest('[wire\\:id]')?.__livewire

            if (!component) return;

            let placeholderSrc = 'https://placehold.co/50x50'
            let id = 'editor-image-' + Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15)

            editor
                .chain()
                .focus()
                .insertContent({
                type: 'image',
                attrs: { src: placeholderSrc, 'data-upload-id': id },
                })
                .run()

            let $wire = component.$wire

            $wire.uploadMultiple(
                'images',
                files,
                async () => {
                    // Once the upload is finished, we need to save the images to a publically accessible location...
                    let response = await $wire.saveImages()
                    let foundNode = null
                    let nodePos = null

                    editor.state.doc.descendants((node, posHere) => {
                        if (node.type.name === 'image' && node.attrs['data-upload-id'] === id) {
                            foundNode = node
                            nodePos = posHere
                            return false
                        }
                        return true
                    })

                    if (foundNode === null || nodePos === null) return

                    // If there are no images, just delete the placeholder image...
                    if (!response || response.length === 0) {
                        editor.chain().focus().deleteRange({ from: nodePos, to: nodePos + foundNode.nodeSize }).run()

                        return
                    }

                    let images = response.map(src => ({
                        type: 'image',
                        attrs: { src }
                    }))

                    editor.chain().focus().insertContentAt({ from: nodePos, to: nodePos + foundNode.nodeSize }, images).run()
                },
                () => console.log('error'),
                event => console.log('progress', event),
                () => console.log('cancelled')
            )
        },
        onDrop: (editor, files, pos) => {
            let editorEl = editor.options.element

            if (!editorEl) return

            let component = editorEl.closest('[wire\\:id]')?.__livewire

            if (!component) return

            let placeholderSrc = 'https://placehold.co/50x50'
            let id = 'editor-image-' + Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15)

            editor
                .chain()
                .focus()
                .insertContentAt(pos, {
                    type: 'image',
                    attrs: { src: placeholderSrc, 'data-upload-id': id },
                })
                .run()

            let $wire = component.$wire

            $wire.uploadMultiple(
                'images',
                files,
                async () => {
                    let response = await $wire.saveImages()
                    let foundNode = null
                    let nodePos = null

                    editor.state.doc.descendants((node, posHere) => {
                        if (node.type.name === 'image' && node.attrs['data-upload-id'] === id) {
                            foundNode = node
                            nodePos = posHere
                            return false
                        }
                        return true
                    })

                    if (foundNode === null || nodePos === null) return

                    if (!response || response.length === 0) {
                        editor.chain().focus().deleteRange({ from: nodePos, to: nodePos + foundNode.nodeSize }).run()
                        return
                    }

                    let images = response.map(src => ({
                        type: 'image',
                        attrs: { src }
                    }))

                    editor.chain().focus().insertContentAt({ from: nodePos, to: nodePos + foundNode.nodeSize }, images).run()
                },
                () => console.log('error'),
                event => console.log('progress', event),
                () => console.log('cancelled')
            )
        },
    }))
})
