<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? str(request()->path())->headline() }}</title>

    <style>
        ::-webkit-scrollbar {
          -webkit-appearance: none;
          width: 7px;
        }

        ::-webkit-scrollbar-thumb {
          border-radius: 4px;
          background-color: rgba(0, 0, 0, .5);
          box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxStyles
</head>

<body class="min-h-screen bg-white dark:bg-zinc-800">
    <flux:sidebar sticky stashable class="bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700">
        <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

        <flux:brand href="#" logo="https://fluxui.dev/img/demo/logo.png" name="Acme Inc." class="px-2 dark:hidden" />
        <flux:brand href="#" logo="https://fluxui.dev/img/demo/dark-mode-logo.png" name="Acme Inc." class="px-2 hidden dark:flex" />

        <flux:input as="button" variant="filled" placeholder="Search..." icon="magnifying-glass" />

        <flux:navlist variant="outline">
            <flux:navlist.item href="{{ route('home', ['user_id'=>1,'page_category'=>'live_stats_turnover','year'=>date('Y')]) }}">2Salesmen Forecast</flux:navlist.item>
            <flux:navlist.item :href="route('home',['user_id'=>1, 'page_category'=>'category1'])">1Salesmen Forecast</flux:navlist.item>
            <flux:navlist.item icon="home" href="/">Home</flux:navlist.item>
            <flux:navlist.item icon="inbox" badge="12" href="#">Inbox</flux:navlist.item>
            <flux:navlist.item icon="document-text" href="#">Documents</flux:navlist.item>
            <flux:navlist.item icon="calendar" href="#">Calendar</flux:navlist.item>

            <flux:navlist.group expandable heading="Favorites" class="hidden lg:grid">
                <flux:navlist.item href="#">Marketing site</flux:navlist.item>
                <flux:navlist.item href="#">Android app</flux:navlist.item>
                <flux:navlist.item href="#">Brand guidelines</flux:navlist.item>
            </flux:navlist.group>
        </flux:navlist>

        <flux:spacer />

        <flux:navlist variant="outline">
            <flux:navlist.item icon="cog-6-tooth" href="#">Settings</flux:navlist.item>
            <flux:navlist.item icon="information-circle" href="#">Help</flux:navlist.item>
        </flux:navlist>

        <flux:dropdown position="top" align="start" class="max-lg:hidden">
            <flux:profile avatar="https://fluxui.dev/img/demo/user.png" name="Olivia Martin" />

            <flux:menu>
                <flux:menu.radio.group>
                    <flux:menu.radio checked>Olivia Martin</flux:menu.radio>
                    <flux:menu.radio>Truly Delta</flux:menu.radio>
                </flux:menu.radio.group>

                <flux:menu.separator />

                <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    </flux:sidebar>
    <flux:header class=" bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
            <flux:navbar>
                <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />
                <flux:brand>Logo</flux:brand>
                <flux:navbar.item href="/">Home</flux:navbar.item>
                <flux:dropdown>
                    <flux:navbar.item icon-trailing="chevron-down">Components</flux:navbar.item>
                    <flux:navmenu class="max-h-[calc(100vh-64px)]">
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
