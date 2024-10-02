<?php

use App\Models\Post;
use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new class extends Component {};

?>

<flux:main class="space-y-4">
    <flux:button>Test</flux:button>
    <flux:button href="/">Test</flux:button>
    <button class="flex">Test</button>
    <a href="/" class="inline-flex">Test</a>
</flux:main>


{{-- <button type="button" class="flex items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-50 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none h-10 text-sm rounded-lg px-4  bg-white hover:bg-zinc-50 dark:bg-zinc-700 dark:hover:bg-zinc-600/75 text-zinc-800 dark:text-white border border-zinc-200 hover:border-zinc-200 border-b-zinc-300/80 dark:border-zinc-600 dark:hover:border-zinc-600 shadow-sm group-[]/button:-ml-[1px] group-[]/button:first:ml-0" data-flux-button="data-flux-button">
    Test
</button>
<a href="/" class="flex items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-50 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none h-10 text-sm rounded-lg px-4  bg-white hover:bg-zinc-50 dark:bg-zinc-700 dark:hover:bg-zinc-600/75 text-zinc-800 dark:text-white border border-zinc-200 hover:border-zinc-200 border-b-zinc-300/80 dark:border-zinc-600 dark:hover:border-zinc-600 shadow-sm group-[]/button:-ml-[1px] group-[]/button:first:ml-0" data-flux-button="data-flux-button">
    Test
</a> --}}
