<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ dark: $persist(window.matchMedia('(prefers-color-scheme: dark)').matches) }" x-init="window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => dark = e.matches)"
    :class="{ 'dark': dark }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <wireui:scripts />
    @livewireStyles()
</head>

<body class="font-sans antialiased bg-stone-50 dark:bg-stone-950 text-stone-900 dark:text-stone-100">
    <div class="flex-col w-full md:flex md:flex-row md:min-h-screen">
        <x-sidebar>
            <x-slot:header>
                <x-logo />
            </x-slot:header>
            <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-nav-link>
        </x-sidebar>
        <div class="flex-1 flex flex-col min-w-0 bg-stone-50 dark:bg-stone-950">
            <!-- Page Heading -->
            @if (isset($header))
                <header class="w-full bg-stone-50/50 dark:bg-stone-950/50 backdrop-blur-sm sticky top-0 z-20 ">
                    <div class="mx-auto max-w-7xl py-5 px-6 sm:px-8 lg:px-10">
                        <h1 class="text-xl font-bold tracking-tight text-stone-900 dark:text-stone-100 text-left">
                            {{ $header }}
                        </h1>
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main class="flex-1">
                <div class="p-6 sm:p-8 lg:p-10">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
    @stack('modals')
    @livewireScripts()
</body>

</html>
