import { defaultValueCtx, Editor, rootCtx } from '@milkdown/kit/core'
import { commonmark } from '@milkdown/kit/preset/commonmark'
import { nord } from '@milkdown/theme-nord'

import '@milkdown/theme-nord/style.css'
import { milkShiki } from './milkdown-shiki.js'

const markdown = `# Milkdown Vanilla Shiki Highlight

> You're scared of a world where you're needed.

\`\`\`ts
Editor
  .make()
  .config(ctx => {
    ctx.set(rootCtx, '#app')
    ctx.set(defaultValueCtx, markdown)
  })
  .config(nord)
  .use(commonmark)
  .use(milkShiki)
  .create()
\`\`\`

This is a demo for using Milkdown with **Vanilla JavaScript**.
The code block is highlighted by [shiki](https://shiki.matsu.io/).`

document.addEventListener('DOMContentLoaded', () => {
    let root = document.getElementById('editor')
    
    Editor.make()
    .config(ctx => {
        ctx.set(rootCtx, root)
        ctx.set(defaultValueCtx, markdown)
    })
    .config(nord)
    .use(milkShiki)
    .use(commonmark)
    .create()
})