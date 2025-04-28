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
// --- END OF OLD STUFF -- //



// -- BASIC IMAGE IMPLEMENTATION -- //
// import Image from '@tiptap/extension-image'

// document.addEventListener('flux:editor', (e) => {
//     e.detail.registerExtension(Image)
// })
// --- END OF BASIC IMAGE IMPLEMENTATION -- //

// -- BASIC IMAGE IMPLEMENTATION WITH TOOLBAR BUTTON -- //
// import Image from '@tiptap/extension-image'

// document.addEventListener('flux:editor', (e) => {
//     e.detail.registerExtension(Image)

//     e.detail.initializeToolbarButton(({editor, toolbar, setActiveState}) => {
//         let imageToolbarElement = toolbar.querySelector('[data-editor="image"]')

//         if (! imageToolbarElement) return

//         let toolbarButton = imageToolbarElement.querySelector('[data-match-target]')
//         let input = imageToolbarElement.querySelector('[data-editor="image:url"]')
//         let insertButton = imageToolbarElement.querySelector('[data-editor="image:insert"]')

//         if (! toolbarButton || ! input) return

//         let insertImage = () => {
//             let url = input.value?.trim();

//             if (url === '') return;

//             editor.chain().focus().setImage({ src: url }).run();

//             input.value = '';
//         }

//         input.addEventListener('keydown', e => {
//             if (['ArrowLeft', 'ArrowRight'].includes(e.key) || /^[a-zA-Z0-9]$/.test(e.key)) {
//                 e.stopPropagation();
//             }
//         })
//         input.addEventListener('input', e => e.stopPropagation())
//         input.addEventListener('change', e => e.stopPropagation())
//         input.addEventListener('keydown', e => ['Enter'].includes(e.key) && insertImage())

//         insertButton.addEventListener('click', insertImage)

//         setActiveState(() => {
//             if (editor.isActive('image')) {
//                 toolbarButton.setAttribute('data-match', '')

//                 let attrs = editor.getAttributes('image')
//                 input.value = attrs.src || ''
//             } else {
//                 toolbarButton.removeAttribute('data-match')
//                 input.value = ''
//             }
//         })
//     })
// })
// --- END OF BASIC IMAGE IMPLEMENTATION WITH TOOLBAR BUTTON -- //

// -- BASIC IMAGE IMPLEMENTATION WITH TOOLBAR BUTTON ELEMENT -- //
// import Image from '@tiptap/extension-image'

// document.addEventListener('flux:editor', (e) => {
//     e.detail.registerExtension(Image)

//     class UIImageButton extends UIEditorButton {
//         initialize() {
//             this.input = this.querySelector('input[data-editor="image:url"]')
//             this.button = this.querySelector('button[data-match-target]')
//             this.insertButton = this.querySelector('button[data-editor="image:insert"]')

//             if (! this.button || ! this.input) return

//             this.input.addEventListener('keydown', e => {
//                 if (['ArrowLeft', 'ArrowRight'].includes(e.key) || /^[a-zA-Z0-9]$/.test(e.key)) {
//                     e.stopPropagation();
//                 }
//             })
//             this.input.addEventListener('input', e => e.stopPropagation())
//             this.input.addEventListener('change', e => e.stopPropagation())
//             this.input.addEventListener('keydown', e => ['Enter'].includes(e.key) && this.insertImage())

//             this.insertButton.addEventListener('click', () => this.insertImage())
//         }

//         insertImage() {
//             let url = this.input.value?.trim();

//             if (url === '') return;

//             this.editor.chain().focus().setImage({ src: url }).run();

//             this.input.value = '';
//         }

//         isActive() {
//             return this.editor.isActive('image')
//         }

//         activate() {
//             this.button.setAttribute('data-match', '')

//             let attrs = this.editor.getAttributes('image')
//             this.input.value = attrs.src || ''
//         }

//         deactivate() {
//             this.button.removeAttribute('data-match')
//             this.input.value = ''
//         }
//     }

//     customElements.define(`ui-image-button`, UIImageButton)
// })
// --- END OF BASIC IMAGE IMPLEMENTATION WITH TOOLBAR BUTTON ELEMENT -- //



// --- WORKING IMPLEMENTATION OF IMAGES WITH EDITOR EXTENSION -- //
// import Image from '@tiptap/extension-image'
// import FileHandler from '@tiptap-pro/extension-file-handler'

// document.addEventListener('flux:editor', (e) => {
//     // e.detail.disableExtension('underline')
//     // e.detail.enableExtension('image')
//     e.detail.registerExtension(Image.extend({
//         addAttributes() {
//             return {
//                 ...this.parent?.(),
//                 'data-upload-id': {
//                     default: undefined,
//                 },
//             }
//         },
//     }))

//     e.detail.initializeToolbarButton(({editor, toolbar, setActiveState}) => {
//         if (toolbar.querySelector('[data-editor="image"]')) {
//             toolbar.querySelector('[data-editor="image:url"]')?.addEventListener('keydown', e => {
//                 if (['ArrowLeft', 'ArrowRight'].includes(e.key) || /^[a-zA-Z0-9]$/.test(e.key)) {
//                     e.stopPropagation();
//                 }
//             })

//             toolbar.querySelector('[data-editor="image:url"]')?.addEventListener('input', e => e.stopPropagation())
//             toolbar.querySelector('[data-editor="image:url"]')?.addEventListener('change', e => e.stopPropagation())

//             let insertImage = () => {
//                 let url = toolbar.querySelector('[data-editor="image:url"]')?.value?.trim();

//                 if (!url) return;

//                 editor.chain().focus().setImage({ src: url }).run();

//                 if (toolbar.querySelector('[data-editor="image:url"]')) {
//                     toolbar.querySelector('[data-editor="image:url"]').value = '';
//                 }
//             }

//             toolbar.querySelector('[data-editor="image:insert"]')?.addEventListener('click', insertImage)
//             toolbar.querySelector('[data-editor="image:url"]')?.addEventListener('keydown', e => ['Enter'].includes(e.key) && insertImage())

//         }

//         setActiveState(() => {
//             let imageInput = toolbar.querySelector('[data-editor="image:url"]')

//             if (imageInput) {
//                 let imageButton = toolbar.querySelector('[data-editor="image"] [data-match-target]')

//                 if (editor.isActive('image')) {
//                     imageButton && imageButton.setAttribute('data-match', '')

//                     let attrs = editor.getAttributes('image')
//                     imageInput.value = attrs.src || ''
//                 } else {
//                     imageButton && imageButton.removeAttribute('data-match')
//                     imageInput.value = ''
//                 }
//             }
//         })
//     })
// })

// document.addEventListener('flux:editor', (e) => {
//     e.detail.registerExtension(FileHandler.configure({
//         // allowedMimeTypes: [],
//         onPaste: (editor, files, htmlContent) => {
//             let pos = editor.state.selection

//             // If there is htmlContent, stop manual insertion & let other extensions handle insertion via inputRule
//             // you could extract the pasted file from this url string and upload it to a server for example...
//             if (htmlContent) return

//             uploadImages(editor, files, pos)
//         },
//         onDrop: (editor, files, pos) => {
//             uploadImages(editor, files, pos)
//         },
//     }))
// })

// let uploadImages = (editor, files, pos) => {
//     let editorEl = editor.options.element

//     if (!editorEl) return;

//     let component = editorEl.closest('[wire\\:id]')?.__livewire

//     if (!component) return;

//     let id = addPlaceholder(editor, pos)

//     let $wire = component.$wire

//     $wire.uploadMultiple(
//         'images',
//         files,
//         async () => {
//             // Once the upload is finished, we need to save the images to a publically accessible location...
//             console.log(files)

//             let formData = new FormData()
//             files.forEach(file => {
//                 formData.append('images[]', file)
//             })

//             let imageUrls = await $wire.uploadIt({files: formData})

//             replacePlaceholder(editor, id, imageUrls)
//         },
//         () => console.log('error'),
//         event => console.log('progress', event),
//         () => console.log('cancelled')
//     )
// }

// let addPlaceholder = (editor, pos) => {
//     let placeholderSrc = 'https://placehold.co/100x50?text=Uploading...'
//     let id = 'editor-image-' + Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15)

//     editor
//         .chain()
//         .focus()
//         .insertContentAt(pos,{
//             type: 'image',
//             attrs: { src: placeholderSrc, 'data-upload-id': id },
//         })
//         .run()

//     return id
// }

// let replacePlaceholder = (editor, id, imageUrls) => {
//     let foundNode = null
//     let nodePos = null

//     editor.state.doc.descendants((node, posHere) => {
//         if (node.type.name === 'image' && node.attrs['data-upload-id'] === id) {
//             foundNode = node
//             nodePos = posHere
//             return false
//         }
//         return true
//     })

//     if (foundNode === null || nodePos === null) return

//     // If there are no images, just delete the placeholder image...
//     if (!imageUrls || imageUrls.length === 0) {
//         editor.chain().focus().deleteRange({ from: nodePos, to: nodePos + foundNode.nodeSize }).run()

//         return
//     }

//     let images = imageUrls.map(src => ({
//         type: 'image',
//         attrs: { src }
//     }))

//     editor.chain().focus().insertContentAt({ from: nodePos, to: nodePos + foundNode.nodeSize }, images).run()
// }
// --- END OF WORKING IMPLEMENTATION OF IMAGES WITH EDITOR EXTENSION -- //

// --- START OF FINAL IMPLEMENTATION --- //

import Image from '@tiptap/extension-image'

document.addEventListener('flux:editor', (e) => {
    e.detail.disableExtension('underline')
    e.detail.registerExtension(Image)

    e.detail.init(({ editor }) => {
        editor.on('contentError', ({ editor }) => {})

        editor.on('create', ({ editor }) => {})

        editor.on('update', ({ editor }) => {})

        editor.on('selectionUpdate', ({ editor }) => {})

        editor.on('transaction', ({ editor }) => {})

        editor.on('focus', ({ editor }) => {})

        editor.on('blur', ({ editor }) => {})

        editor.on('destroy', ({ editor }) => {})

        editor.on('drop', ({ editor }) => {})

        editor.on('paste', ({ editor }) => {})
    })

    e.detail.init(({ editor }) => {
        editor.on('create', ({ editor }) => {
            let toolbar = editor.options.element.closest('ui-editor').querySelector('ui-toolbar')

            let imageToolbarElement = toolbar.querySelector('[data-editor="image"]')

            if (! imageToolbarElement) return

            let toolbarButton = imageToolbarElement.querySelector('[data-match-target]')
            let input = imageToolbarElement.querySelector('[data-editor="image:url"]')
            let insertButton = imageToolbarElement.querySelector('[data-editor="image:insert"]')

            if (! toolbarButton || ! input) return

            let insertImage = () => {
                let url = input.value?.trim();

                if (url === '') return;

                editor.chain().focus().setImage({ src: url }).run();

                input.value = '';
            }

            input.addEventListener('keydown', e => {
                if (['ArrowLeft', 'ArrowRight'].includes(e.key) || /^[a-zA-Z0-9]$/.test(e.key)) {
                    e.stopPropagation();
                }
            })
            input.addEventListener('input', e => e.stopPropagation())
            input.addEventListener('change', e => e.stopPropagation())
            input.addEventListener('keydown', e => ['Enter'].includes(e.key) && insertImage())

            insertButton.addEventListener('click', insertImage)

            editor.on('transaction', ({ editor }) => {
                if (editor.isActive('image')) {
                    toolbarButton.setAttribute('data-match', '')

                    let attrs = editor.getAttributes('image')
                    input.value = attrs.src || ''
                } else {
                    toolbarButton.removeAttribute('data-match')
                    input.value = ''
                }
            })
        })
    })
})