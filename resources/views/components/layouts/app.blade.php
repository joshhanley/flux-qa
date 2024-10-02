<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? str(request()->path())->headline() }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxStyles
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">
    {{-- <flux:sidebar sticky stashable class="bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />
        <flux:navlist>
            <flux:navlist.item icon="home" href="/">Home1</flux:navlist.item>
            <flux:navlist.item icon="home" :href="route('other')">Other</flux:navlist.item>
            <flux:navlist.item icon="puzzle-piece" href="#">Features</flux:navlist.item>
            <flux:navlist.item icon="currency-dollar" href="#">Pricing</flux:navlist.item>
            <flux:navlist.item icon="user" href="#">About</flux:navlist.item>
        </flux:navlist>
    </flux:sidebar> --}}
    <flux:header class=" bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
            <flux:navbar>
                <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />
                <flux:brand>Logo</flux:brand>
                <flux:navbar.item href="/">Home</flux:navbar.item>
                <flux:dropdown>
                    <flux:navbar.item icon-trailing="chevron-down">Components</flux:navbar.item>
                    <flux:navmenu>
                        @foreach (\App\Components::get() as $componentName)
                            <flux:navmenu.item href="/{{ $componentName }}">{{ str($componentName)->headline() }}</flux:navmenu.item>
                        @endforeach
                    </flux:navmenu>
                </flux:dropdown>
            </flux:navbar>

            <flux:spacer />

            <flux:navbar>
                {{-- <livewire:command-palette /> --}}
            </flux:navbar>
    </flux:header>

    {{ $slot }}

    @fluxScripts
</body>

</html>
