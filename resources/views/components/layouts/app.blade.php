<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? str(request()->path())->headline() }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxStyles
</head>

<body>
    <flux:page>
        <flux:header sticky container class="bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700">
            <flux:heading>
                <flux:navbar>
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
            </flux:heading>
        </flux:header>

        {{ $slot }}
    </flux:page>

    @fluxScripts
</body>

</html>
