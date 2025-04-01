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

import Link from '@tiptap/extension-link'
import Youtube from '@tiptap/extension-youtube'

document.addEventListener('flux:editor', (e) => {
    e.detail.addExtension(
        Youtube.configure({
            controls: false,
            nocookie: true,
        }),
    )

    e.detail.replaceExtension(Link.configure({
        HTMLAttributes: {
          class: 'my-custom-class',
        },
    }))
})