<html>
<head>
    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])
    @fluxStyles
    @livewireStyles
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800">
    {{ $slot }} 

    @fluxScripts
    {{-- @livewireScriptConfig  --}}
    @livewireScripts
</body>
</html>
