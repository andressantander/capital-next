<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Inversión Inteligente') }} - @yield('title', 'Claridad y Crecimiento')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans text-text-primary bg-bg-light antialiased selection:bg-accent selection:text-white">
    <div class="min-h-screen flex flex-col">
        @include('components.header')

        <main class="flex-grow">
            {{ $slot ?? '' }}
            @yield('content')
        </main>

        @include('components.footer')
    </div>

    @livewireScripts
</body>
</html>
