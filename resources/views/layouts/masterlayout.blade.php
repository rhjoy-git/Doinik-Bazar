<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale() ?? 'en') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Doinik Bazar - Your one-stop shop for all your needs.">

    <title>Doinik Bazar @yield('title', '- Better Life')</title>

    {{-- Splide --}}
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    @endif
</head>

<body class="font-sans antialiased dark:bg-white dark:text-black"
    x-data="{ desktopMenuOpen: false, mobileMenuOpen: false}" x-cloak>
    <!-- Top Bar -->
    @include('partials.top-bar')
    <!-- Navbar -->
    @include('partials.navbar')
    <!-- Content  -->
    @hasSection('content')
    @yield('content')
    @endif
    <!-- Desktop Footer  -->
    @include('partials.footer')
    <!-- /Desktop Footer  -->
    <!-- Payment and copyright  -->
    <section class="h-11 bg-amber-400">
        <div class="mx-auto flex max-w-[1200px] items-center justify-between px-4 pt-2">
            <p>&copy; Rakibul Hasan Joy</p>
            <div class="flex items-center space-x-3">
                <img class="h-8" src="https://cdn-icons-png.flaticon.com/512/5968/5968299.png" alt="Visa icon" />
                <img class="h-8" src="https://cdn-icons-png.flaticon.com/512/349/349228.png" alt="AE icon" />
                <img class="h-8" src="https://cdn-icons-png.flaticon.com/512/5968/5968144.png" alt="Apple pay icon" />
            </div>
        </div>
    </section>

    <!-- Scripts -->
    @hasSection('scripts')
    @yield('scripts')
    @endif

</body>

</html>