class MarkdownEditor extends HTMLElement {
    constructor() {
        super()
    }

    connectedCallback() {
        this.textarea = this.querySelector('textarea')
    }

    // connectedCallback() {
    //     console.log('connectedCallback')
    // }

    // disconnectedCallback() {
    //     console.log('disconnectedCallback')
    // }

    // attributeChangedCallback(name, oldValue, newValue) {
    //     console.log('attributeChangedCallback', name, oldValue, newValue)
    // }

    // static get observedAttributes() {
    //     return ['class']
    // }
}

class MarkdownToolbar extends HTMLElement {
    constructor() {
        super()
        this.addEventListener('click', this.handleToolbarClick.bind(this))
    }

    connectedCallback() {
        this.editor = this.closest('markdown-editor')
    }

    handleToolbarClick(event) {
        let target = event.target

        // Check if the clicked element is a toolbar button
        if (target.tagName && target.tagName.toLowerCase().includes('markdown-')) {
            this.handleButtonClick(target, event)
        }
    }

    handleButtonClick(button, event) {
        // Focus the textarea if it's not already focused
        this.editor.textarea.focus()

        let start = this.editor.textarea.selectionStart
        let end = this.editor.textarea.selectionEnd
        let selectedText = this.editor.textarea.value.substring(start, end)
        let fullText = this.editor.textarea.value

        // Get the text to insert from the button component
        let insertText = button.getInsertText ? button.getInsertText(selectedText, start, end, fullText) : null
        if (!insertText) return

        // Handle removing outer ** while keeping selection on original text
        if (insertText.removeOuterBold) {
            // Remove the ** outside the selection
            let newValue = fullText.substring(0, start - 2) + selectedText + fullText.substring(end + 2)
            this.editor.textarea.value = newValue

            // Keep selection on the original text (adjusted for the removed **)
            this.editor.textarea.selectionStart = start - 2
            this.editor.textarea.selectionEnd = end - 2

            // Trigger input event to notify Livewire of the change
            this.editor.textarea.dispatchEvent(new Event('input', { bubbles: true }))
            return
        }

        // Insert the text
        let newValue = this.editor.textarea.value.substring(0, start) + insertText.text + this.editor.textarea.value.substring(end)
        this.editor.textarea.value = newValue

        // Set cursor position based on what the button component returns
        this.editor.textarea.selectionStart = start + insertText.selectionStart
        this.editor.textarea.selectionEnd = start + insertText.selectionEnd

        // Trigger input event to notify Livewire of the change
        this.editor.textarea.dispatchEvent(new Event('input', { bubbles: true }))
    }
}

class MarkdownBold extends HTMLElement {
    constructor() {
        super()
    }

    getInsertText(selectedText, start, end, fullText) {
        if (selectedText) {
            // Check if the selected text is wrapped in ** outside the selection
            let beforeSelection = fullText.substring(Math.max(0, start - 2), start)
            let afterSelection = fullText.substring(end, Math.min(fullText.length, end + 2))

            if (beforeSelection === '**' && afterSelection === '**') {
                // Remove the ** wrapping but keep selection on the original text
                return {
                    text: selectedText,
                    selectionStart: 0,
                    selectionEnd: selectedText.length,
                    removeOuterBold: true,
                    originalStart: start,
                    originalEnd: end
                }
            }

            // Check if text is already wrapped in ** (within selection)
            if (selectedText.startsWith('**') && selectedText.endsWith('**')) {
                // Remove the ** wrapping
                return {
                    text: selectedText.slice(2, -2),
                    selectionStart: 0,
                    selectionEnd: selectedText.length - 4
                }
            }

            // Check if text contains **** (prioritize outer wrapping first)
            let innerBoldIndex = selectedText.indexOf('****')
            if (innerBoldIndex !== -1) {
                // Remove the ****
                let before = selectedText.substring(0, innerBoldIndex)
                let after = selectedText.substring(innerBoldIndex + 4)
                return {
                    text: before + after,
                    selectionStart: innerBoldIndex,
                    selectionEnd: innerBoldIndex
                }
            }

            // Wrap selected text with **
            return {
                text: `**${selectedText}**`,
                selectionStart: 2,
                selectionEnd: 2 + selectedText.length
            }
        } else {
            // Insert **** and position cursor between them
            return {
                text: '****',
                selectionStart: 2,
                selectionEnd: 2
            }
        }
    }
}

customElements.define('markdown-editor', MarkdownEditor)
customElements.define('markdown-toolbar', MarkdownToolbar)
customElements.define('markdown-bold', MarkdownBold)
