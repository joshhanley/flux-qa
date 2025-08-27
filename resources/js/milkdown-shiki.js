import { createHighlighter } from 'shiki'
import { $proseAsync } from '@milkdown/kit/utils'
import { codeBlockSchema } from '@milkdown/kit/preset/commonmark'
import { findChildren } from '@milkdown/kit/prose'
import { Plugin, PluginKey } from '@milkdown/kit/prose/state'
import { Decoration, DecorationSet } from '@milkdown/kit/prose/view'

function getHighlighter() {
  return createHighlighter({
    themes: ['github-light'],
    langs: ['javascript', 'tsx', 'typescript', 'markdown'],
  })
}

function getDecorations(ctx, doc, highlighter) {
  const decorations = []

  const children = findChildren(
    node => node.type === codeBlockSchema.type(ctx)
  )(doc)

  children.forEach(block => {
    let from = block.pos + 1
    const pos = block.pos
    const size = block.node.nodeSize
    const { language } = block.node.attrs
    if (!language) return

    const { tokens, rootStyle } = highlighter.codeToTokens(block.node.textContent, {
      lang: language,
      theme: highlighter.getLoadedThemes()[0],
    })

    if (rootStyle) {
      decorations.push(Decoration.node(pos, pos + size, { style: rootStyle }))
    }

    for (const line of tokens) {
      for (const token of line) {
        const to = from + token.content.length

        decorations.push(
          Decoration.inline(from, to, {
            style: stringifyTokenStyle(
              token.htmlStyle ?? `color: ${token.color}`
            ),
            class: 'shiki',
          })
        )

        from = to
      }

      from += 1
    }
  })

  return DecorationSet.create(doc, decorations)
}

function stringifyTokenStyle(token) {
  if (typeof token === 'string') return token
  return Object.entries(token)
    .map(([key, value]) => `${key}:${value}`)
    .join(';')
}

export const milkShiki = $proseAsync(async ctx => {
  const key = new PluginKey('shiki')
  const highlighter = await getHighlighter()

  return new Plugin({
    key,
    state: {
      init: (_, { doc }) => getDecorations(ctx, doc, highlighter),
      apply: (tr, value, oldState, newState) => {
        const codeBlockType = codeBlockSchema.type(ctx)

        const isNodeName = newState.selection.$head.parent.type === codeBlockType
        const isPreviousNodeName = oldState.selection.$head.parent.type === codeBlockType

        const oldNode = findChildren(node => node.type === codeBlockType)(oldState.doc)
        const newNode = findChildren(node => node.type === codeBlockType)(newState.doc)

        const codeBlockChanged =
          tr.docChanged &&
          (isNodeName ||
            isPreviousNodeName ||
            oldNode.length !== newNode.length ||
            oldNode[0]?.node.attrs.language !== newNode[0]?.node.attrs.language)

        if (codeBlockChanged) {
          return getDecorations(ctx, tr.doc, highlighter)
        }

        return value.map(tr.mapping, tr.doc)
      },
    },
    props: {
      decorations(state) {
        return key.getState(state)
      },
    },
  })
})