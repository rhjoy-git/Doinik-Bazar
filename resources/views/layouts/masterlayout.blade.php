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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    @endif
</head>

<body class="font-sans antialiased dark:bg-white dark:text-black" x-data="{ megaMenu: false, mobileMenuOpen: false}"
    x-cloak>
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

    <!-- Scripts -->
    @hasSection('scripts')
    @yield('scripts')
    @endif

</body>

</html>