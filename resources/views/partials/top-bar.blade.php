<!-- Top Bar -->
<header class="mx-auto flex h-16 max-w-screen-xl items-center justify-between px-5">
    <a href="/" class="flex items-center">
        <img class="cursor-pointer h-6 w-40" src="{{ asset('resources/images/dblogo.png') }}" alt="company logo" />
    </a>
    <div class="md:hidden">
        <button @click="mobileMenuOpen = !mobileMenuOpen" aria-label="Menu">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-8 w-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>

    <form class="hidden h-10 w-5/12 items-center border md:flex m-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="mx-3 h-4 w-4">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>

        <input class="w-11/12 outline-none p-0 border-none md:block focus:outline-none focus:ring-0 focus:ring-offset-0"
            type="search" placeholder="Search" />

        <button aria-label="Search" class="ml-auto h-full bg-amber-400 px-4 hover:bg-yellow-300">
            Search
        </button>
    </form>

    <div class="hidden gap-3 md:flex">
        <a href="{{ route('user.wishlist') }}" class="flex cursor-pointer flex-col items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
            </svg>

            <p class="text-xs">Wishlist</p>
        </a>

        <a href="{{ route('user.cart') }}" class="flex cursor-pointer flex-col items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                <path fill-rule="evenodd"
                    d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 004.25 22.5h15.5a1.875 1.875 0 001.865-2.071l-1.263-12a1.875 1.875 0 00-1.865-1.679H16.5V6a4.5 4.5 0 10-9 0zM12 3a3 3 0 00-3 3v.75h6V6a3 3 0 00-3-3zm-3 8.25a3 3 0 106 0v-.75a.75.75 0 011.5 0v.75a4.5 4.5 0 11-9 0v-.75a.75.75 0 011.5 0v.75z"
                    clip-rule="evenodd" />
            </svg>

            <p class="text-xs">Cart</p>
        </a>

        <a href="{{ route('user.account') }}" class="relative flex cursor-pointer flex-col items-center justify-center">
            <span class="absolute bottom-[33px] right-1 flex h-2 w-2">
                <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-red-400 opacity-75"></span>
                <span class="relative inline-flex h-2 w-2 rounded-full bg-red-500"></span>
            </span>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>

            <p class="text-xs">Account</p>
        </a>
    </div>
</header>
<!-- /Top Bar -->

<!-- Mobile view  -->
<section x-show="mobileMenuOpen" @click.outside="mobileMenuOpen = false"
    class="absolute left-0 right-0 z-50 h-screen w-full bg-white" style="display: none">
    <div class="mx-auto">
        <div class="mx-auto flex w-full justify-center gap-3 py-4">
            <a href="{{ route('user.wishlist') }}" class="flex cursor-pointer flex-col items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>

                <p class="text-xs">Wishlist</p>
            </a>

            <a href="{{ route('user.cart') }}" class="flex cursor-pointer flex-col items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                    <path fill-rule="evenodd"
                        d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 004.25 22.5h15.5a1.875 1.875 0 001.865-2.071l-1.263-12a1.875 1.875 0 00-1.865-1.679H16.5V6a4.5 4.5 0 10-9 0zM12 3a3 3 0 00-3 3v.75h6V6a3 3 0 00-3-3zm-3 8.25a3 3 0 106 0v-.75a.75.75 0 011.5 0v.75a4.5 4.5 0 11-9 0v-.75a.75.75 0 011.5 0v.75z"
                        clip-rule="evenodd" />
                </svg>

                <p class="text-xs">Cart</p>
            </a>

            <a href="{{ route('user.account') }}"
                class="relative flex cursor-pointer flex-col items-center justify-center">
                <span class="absolute bottom-[33px] right-1 flex h-2 w-2">
                    <span
                        class="absolute inline-flex h-full w-full animate-ping rounded-full bg-red-400 opacity-75"></span>
                    <span class="relative inline-flex h-2 w-2 rounded-full bg-red-500"></span>
                </span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                </svg>

                <p class="text-xs">Account</p>
            </a>
        </div>

        <form class="my-4 mx-5 flex h-9 items-center border">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="mx-3 h-4 w-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>

            <input class="hidden w-11/12 outline-none md:block" type="search" placeholder="Search" />

            <button type="submit" class="ml-auto h-full bg-amber-400 px-4 hover:bg-yellow-300">
                Search
            </button>
        </form>
        <ul class="text-center font-medium">
            <li class="py-2"><a href="/">Home</a></li>
            <li class="py-2"><a href="{{ route('all-products') }}">All Products</a></li>
            <li class="py-2"><a href="{{route('about-us')}}">About Us</a></li>
            <li class="py-2"><a href="{{route('contact-us')}}">Contact Us</a></li>
        </ul>
    </div>
</section>
<!-- /Mobile View  -->