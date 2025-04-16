<flux:dropdown
    position="bottom center"
    data-editor="image"
    class="contents"
>
    <flux:tooltip content="{{ __('Insert image') }}" kbd="⌘K" class="contents">
        <flux:editor.button data-match-target>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
            </svg>
        </flux:editor.button>
    </flux:tooltip>

    <div popover="manual" class="min-w-[360px] p-[5px] rounded-lg border border-zinc-200 dark:border-zinc-600 shadow-xs bg-white dark:bg-zinc-700">
        <div class="h-8 flex justify-between gap-2 ps-2 pe-1" data-flux-editor-image>
            <input data-editor="image:url" type="text" form="" placeholder="https://..." class="flex-1 text-base sm:text-sm outline-hidden bg-transparent" autofocus>

            <div class="flex gap-2 items-center">
                <flux:tooltip content="{{ __('Insert image') }}" class="contents">
                    <button type="button" data-editor="image:insert" class="p-0.5 text-sm font-medium text-zinc-400 rounded-sm [[data-flux-editor-image]:not(:has(input:placeholder-shown))_&:hover]:bg-zinc-200 dark:[[data-flux-editor-image]:not(:has(input:placeholder-shown))_&:hover]:bg-white/10 [[data-flux-editor-image]:not(:has(input:placeholder-shown))_&]:text-zinc-800 dark:[[data-flux-editor-image]:not(:has(input:placeholder-shown))_&]:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 shrink-0" aria-hidden="true"> <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" /> </svg> <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" /> </svg>
                    </button>
                </flux:tooltip>
            </div>
        </div>
    </div>
</flux:dropdown>
