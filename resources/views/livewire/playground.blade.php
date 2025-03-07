<?php

use Livewire\Volt\Component;

new class extends Component {
    //
}; ?>

<div class="[grid-area:sidebar] z-1 flex flex-col gap-4 [:where(&amp;)]:w-64 p-4 max-lg:data-mobile-cloak:hidden [[data-show-stashed-sidebar]_&amp;]:translate-x-0! lg:translate-x-0! z-20! data-stashed:left-0! data-stashed:fixed! data-stashed:top-0! data-stashed:min-h-dvh! data-stashed:max-h-dvh! max-h-dvh overflow-y-auto overscroll-contain lg:hidden bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700 -translate-x-full transition-transform" x-bind:data-stashed="! screenLg" x-resize.document="screenLg = window.innerWidth >= 1024" x-init="$el.classList.add('-translate-x-full'); $el.removeAttribute('data-mobile-cloak'); $el.classList.add('transition-transform')" x-bind:style="{ position: 'sticky', top: $el.offsetTop + 'px', 'max-height': 'calc(100dvh - ' + $el.offsetTop + 'px)' }" x-data="{ screenLg: window.innerWidth >= 1024 }" data-flux-sidebar="" data-stashed="true" style="position: sticky; top: 0px; max-height: calc(0px + 100dvh);">
    <button type="button" class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none h-10 text-sm rounded-lg w-10 inline-flex  bg-transparent hover:bg-zinc-800/5 dark:hover:bg-white/15 text-zinc-400 hover:text-zinc-800 dark:text-zinc-400 dark:hover:text-white     shrink-0 lg:hidden" data-flux-button="data-flux-button" x-data="" x-on:click="document.body.hasAttribute('data-show-stashed-sidebar') ? document.body.removeAttribute('data-show-stashed-sidebar') : document.body.setAttribute('data-show-stashed-sidebar', '')" data-flux-sidebar-toggle="data-flux-sidebar-toggle" aria-label="Toggle sidebar">
        <svg class="shrink-0 [:where(&amp;)]:size-5" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z"></path>
</svg>
    </button>
    <nav class="flex flex-col overflow-visible min-h-auto" data-flux-navlist="">
    <button type="button" class="h-10 lg:h-8 relative flex items-center gap-3 rounded-lg  py-0 text-left w-full px-3 my-px text-zinc-500 dark:text-white/80 data-current:text-(--color-accent-content) hover:data-current:text-(--color-accent-content) data-current:bg-zinc-800/[4%] dark:data-current:bg-white/[7%] hover:text-zinc-800 dark:hover:text-white hover:bg-zinc-800/[4%] dark:hover:bg-white/[7%]" data-flux-navlist-item="data-flux-navlist-item" ref="#">
        <div class="flex-1 text-sm font-medium leading-none whitespace-nowrap [[data-nav-footer]_&amp;]:hidden [[data-nav-sidebar]_[data-nav-footer]_&amp;]:block" data-content="">Dashboard</div>
    </button>
        <button type="button" class="h-10 lg:h-8 relative flex items-center gap-3 rounded-lg  py-0 text-left w-full px-3 my-px text-zinc-500 dark:text-white/80 data-current:text-(--color-accent-content) hover:data-current:text-(--color-accent-content) data-current:bg-zinc-800/[4%] dark:data-current:bg-white/[7%] hover:text-zinc-800 dark:hover:text-white hover:bg-zinc-800/[4%] dark:hover:bg-white/[7%]" data-flux-navlist-item="data-flux-navlist-item" ref="#">
        <div class="flex-1 text-sm font-medium leading-none whitespace-nowrap [[data-nav-footer]_&amp;]:hidden [[data-nav-sidebar]_[data-nav-footer]_&amp;]:block" data-content="">Transactions</div>
    </button>
        <button type="button" class="h-10 lg:h-8 relative flex items-center gap-3 rounded-lg  py-0 text-left w-full px-3 my-px text-zinc-500 dark:text-white/80 data-current:text-(--color-accent-content) hover:data-current:text-(--color-accent-content) data-current:bg-zinc-800/[4%] dark:data-current:bg-white/[7%] hover:text-zinc-800 dark:hover:text-white hover:bg-zinc-800/[4%] dark:hover:bg-white/[7%]" data-flux-navlist-item="data-flux-navlist-item" ref="#">
        <div class="flex-1 text-sm font-medium leading-none whitespace-nowrap [[data-nav-footer]_&amp;]:hidden [[data-nav-sidebar]_[data-nav-footer]_&amp;]:block" data-content="">Customers</div>
    </button>
        <button type="button" class="h-10 lg:h-8 relative flex items-center gap-3 rounded-lg  py-0 text-left w-full px-3 my-px text-zinc-500 dark:text-white/80 data-current:text-(--color-accent-content) hover:data-current:text-(--color-accent-content) data-current:bg-zinc-800/[4%] dark:data-current:bg-white/[7%] hover:text-zinc-800 dark:hover:text-white hover:bg-zinc-800/[4%] dark:hover:bg-white/[7%]" data-flux-navlist-item="data-flux-navlist-item" ref="#">
        <div class="flex-1 text-sm font-medium leading-none whitespace-nowrap [[data-nav-footer]_&amp;]:hidden [[data-nav-sidebar]_[data-nav-footer]_&amp;]:block" data-content="">Wallets</div>
    </button>
        <button type="button" class="h-10 lg:h-8 relative flex items-center gap-3 rounded-lg  py-0 text-left w-full px-3 my-px text-zinc-500 dark:text-white/80 data-current:text-(--color-accent-content) hover:data-current:text-(--color-accent-content) data-current:bg-zinc-800/[4%] dark:data-current:bg-white/[7%] hover:text-zinc-800 dark:hover:text-white hover:bg-zinc-800/[4%] dark:hover:bg-white/[7%]" data-flux-navlist-item="data-flux-navlist-item" ref="#">
        <div class="flex-1 text-sm font-medium leading-none whitespace-nowrap [[data-nav-footer]_&amp;]:hidden [[data-nav-sidebar]_[data-nav-footer]_&amp;]:block" data-content="">Banks</div>
    </button>
        <button type="button" class="h-10 lg:h-8 relative flex items-center gap-3 rounded-lg  py-0 text-left w-full px-3 my-px text-zinc-500 dark:text-white/80 data-current:text-(--color-accent-content) hover:data-current:text-(--color-accent-content) data-current:bg-zinc-800/[4%] dark:data-current:bg-white/[7%] hover:text-zinc-800 dark:hover:text-white hover:bg-zinc-800/[4%] dark:hover:bg-white/[7%]" data-flux-navlist-item="data-flux-navlist-item" ref="#">
        <div class="flex-1 text-sm font-medium leading-none whitespace-nowrap [[data-nav-footer]_&amp;]:hidden [[data-nav-sidebar]_[data-nav-footer]_&amp;]:block" data-content="">Reports</div>
    </button>
</nav>

    <div class="flex-1" data-flux-spacer=""></div>

    <ui-dropdown position="top start" class="md:hidden" data-flux-dropdown="">
    <button type="button" class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none h-8 text-sm rounded-md px-3 inline-flex  bg-transparent hover:bg-zinc-800/5 dark:hover:bg-white/15 text-zinc-800 dark:text-white" data-flux-button="data-flux-button" aria-haspopup="true" aria-controls="lofi-dropdown-a90a8f015066" aria-expanded="false">
        <svg class="shrink-0 [:where(&amp;)]:size-4" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z"></path>
</svg>

                
                    User Name
        
        
                    
                        <svg class="shrink-0 [:where(&amp;)]:size-4  -ml-1" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M11.78 9.78a.75.75 0 0 1-1.06 0L8 7.06 5.28 9.78a.75.75 0 0 1-1.06-1.06l3.25-3.25a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06Z" clip-rule="evenodd"></path>
</svg>
    </button>
        <ui-menu class="[:where(&amp;)]:min-w-48 p-[.3125rem] rounded-lg shadow-xs border border-zinc-200 dark:border-zinc-600 bg-white dark:bg-zinc-700 focus:outline-hidden" popover="manual" data-flux-menu="" id="lofi-dropdown-a90a8f015066" role="menu" tabindex="-1">
    <button type="button" class="flex items-center px-2 py-1.5 w-full focus:outline-hidden rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-active:bg-zinc-50 dark:text-white dark:data-active:bg-zinc-600 **:data-flux-menu-item-icon:text-zinc-400 dark:**:data-flux-menu-item-icon:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current" data-flux-menu-item="data-flux-menu-item" data-flux-menu-item-has-icon="data-flux-menu-item-has-icon" id="lofi-menu-item-55f29f4e043ee" role="menuitem" tabindex="-1">
        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2" data-flux-menu-item-icon="data-flux-menu-item-icon" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M13.024 9.25c.47 0 .827-.433.637-.863a4 4 0 0 0-4.094-2.364c-.468.05-.665.576-.43.984l1.08 1.868a.75.75 0 0 0 .649.375h2.158ZM7.84 7.758c-.236-.408-.79-.5-1.068-.12A3.982 3.982 0 0 0 6 10c0 .884.287 1.7.772 2.363.278.38.832.287 1.068-.12l1.078-1.868a.75.75 0 0 0 0-.75L7.839 7.758ZM9.138 12.993c-.235.408-.039.934.43.984a4 4 0 0 0 4.094-2.364c.19-.43-.168-.863-.638-.863h-2.158a.75.75 0 0 0-.65.375l-1.078 1.868Z"></path>
  <path fill-rule="evenodd" d="m14.13 4.347.644-1.117a.75.75 0 0 0-1.299-.75l-.644 1.116a6.954 6.954 0 0 0-2.081-.556V1.75a.75.75 0 0 0-1.5 0v1.29a6.954 6.954 0 0 0-2.081.556L6.525 2.48a.75.75 0 1 0-1.3.75l.645 1.117A7.04 7.04 0 0 0 4.347 5.87L3.23 5.225a.75.75 0 1 0-.75 1.3l1.116.644A6.954 6.954 0 0 0 3.04 9.25H1.75a.75.75 0 0 0 0 1.5h1.29c.078.733.27 1.433.556 2.081l-1.116.645a.75.75 0 1 0 .75 1.298l1.117-.644a7.04 7.04 0 0 0 1.523 1.523l-.645 1.117a.75.75 0 1 0 1.3.75l.644-1.116a6.954 6.954 0 0 0 2.081.556v1.29a.75.75 0 0 0 1.5 0v-1.29a6.954 6.954 0 0 0 2.081-.556l.645 1.116a.75.75 0 0 0 1.299-.75l-.645-1.117a7.042 7.042 0 0 0 1.523-1.523l1.117.644a.75.75 0 0 0 .75-1.298l-1.116-.645a6.954 6.954 0 0 0 .556-2.081h1.29a.75.75 0 0 0 0-1.5h-1.29a6.954 6.954 0 0 0-.556-2.081l1.116-.644a.75.75 0 0 0-.75-1.3l-1.117.645a7.04 7.04 0 0 0-1.524-1.523ZM10 4.5a5.475 5.475 0 0 0-2.781.754A5.527 5.527 0 0 0 5.22 7.277 5.475 5.475 0 0 0 4.5 10a5.475 5.475 0 0 0 .752 2.777 5.527 5.527 0 0 0 2.028 2.004c.802.458 1.73.719 2.72.719a5.474 5.474 0 0 0 2.78-.753 5.527 5.527 0 0 0 2.001-2.027c.458-.802.719-1.73.719-2.72a5.475 5.475 0 0 0-.753-2.78 5.528 5.528 0 0 0-2.028-2.002A5.475 5.475 0 0 0 10 4.5Z" clip-rule="evenodd"></path>
</svg>

            
    Settings
    </button>
            <div class="-mx-[.3125rem] my-[.3125rem] h-px" data-flux-menu-separator="">
    <div data-orientation="horizontal" role="none" class="border-0 [print-color-adjust:exact] bg-zinc-800/15 dark:bg-white/20 h-px w-full dark:bg-zinc-600!" data-flux-separator=""></div>
</div>
            <div class="p-2 pb-1 w-full flex items-center text-left text-xs font-medium text-zinc-500 font-medium dark:text-zinc-300" data-flux-menu-heading="">
    <div class="w-7 hidden [[data-flux-menu]:has(>[data-flux-menu-item-has-icon])_&amp;]:block"></div>

    <div>Admin</div>
</div>
            <button type="button" class="flex items-center px-2 py-1.5 w-full focus:outline-hidden rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-active:bg-zinc-50 dark:text-white dark:data-active:bg-zinc-600 **:data-flux-menu-item-icon:text-zinc-400 dark:**:data-flux-menu-item-icon:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current" data-flux-menu-item="data-flux-menu-item" data-flux-menu-item-has-icon="data-flux-menu-item-has-icon" id="lofi-menu-item-dba3f54938425" role="menuitem" tabindex="-1">
        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2" data-flux-menu-item-icon="data-flux-menu-item-icon" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M7 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM14.5 9a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5ZM1.615 16.428a1.224 1.224 0 0 1-.569-1.175 6.002 6.002 0 0 1 11.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 0 1 7 18a9.953 9.953 0 0 1-5.385-1.572ZM14.5 16h-.106c.07-.297.088-.611.048-.933a7.47 7.47 0 0 0-1.588-3.755 4.502 4.502 0 0 1 5.874 2.636.818.818 0 0 1-.36.98A7.465 7.465 0 0 1 14.5 16Z"></path>
</svg>

            
    Team
    </button>
            <button type="button" class="flex items-center px-2 py-1.5 w-full focus:outline-hidden rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-active:bg-zinc-50 dark:text-white dark:data-active:bg-zinc-600 **:data-flux-menu-item-icon:text-zinc-400 dark:**:data-flux-menu-item-icon:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current" data-flux-menu-item="data-flux-menu-item" data-flux-menu-item-has-icon="data-flux-menu-item-has-icon" id="lofi-menu-item-5243abb8250d4" role="menuitem" tabindex="-1">
        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2" data-flux-menu-item-icon="data-flux-menu-item-icon" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" data-slot="icon">
  <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
</svg>
    
    Security
    </button>
            <div class="-mx-[.3125rem] my-[.3125rem] h-px" data-flux-menu-separator="">
    <div data-orientation="horizontal" role="none" class="border-0 [print-color-adjust:exact] bg-zinc-800/15 dark:bg-white/20 h-px w-full dark:bg-zinc-600!" data-flux-separator=""></div>
</div>
            <button type="button" class="flex items-center px-2 py-1.5 w-full focus:outline-hidden rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-active:bg-zinc-50 dark:text-white dark:data-active:bg-zinc-600 **:data-flux-menu-item-icon:text-zinc-400 dark:**:data-flux-menu-item-icon:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current" data-flux-menu-item="data-flux-menu-item" data-flux-menu-item-has-icon="data-flux-menu-item-has-icon" id="lofi-menu-item-4e964d8eecaf3" role="menuitem" tabindex="-1">
        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2" data-flux-menu-item-icon="data-flux-menu-item-icon" data-flux-icon="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" data-slot="icon">
  <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
  <polyline points="16 17 21 12 16 7"></polyline>
  <line x1="21" x2="9" y1="12" y2="12"></line>
</svg>
    
    Log out
    </button>
</ui-menu>
</ui-dropdown>
</div>
