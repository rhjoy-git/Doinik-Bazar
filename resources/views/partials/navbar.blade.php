<!-- Start Nav bar -->
<nav class="relative bg-violet-900">
    <div class="mx-auto hidden h-12 w-full max-w-screen-xl items-center md:flex">
        <button @click="megaMenu = !megaMenu"
            class="ml-5 flex h-full w-40 cursor-pointer items-center justify-center bg-amber-400">
            <div class="flex justify-around" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="mx-1 h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                All categories
            </div>
        </button>

        <div class="mx-7 flex gap-8">
            <a class="font-light text-white duration-100 hover:text-yellow-400 hover:underline"
                href="{{ route('home') }}">Home</a>
            <a class="font-light text-white duration-100 hover:text-yellow-400 hover:underline"
                href="{{ route('all-products') }}">All Products</a>
            <a class="font-light text-white duration-100 hover:text-yellow-400 hover:underline"
                href="{{ route('about-us') }}">About
                Us</a>
            <a class="font-light text-white duration-100 hover:text-yellow-400 hover:underline"
                href="{{ route('contact-us') }}">Contact Us</a>
        </div>

        <div class="ml-auto flex gap-4 px-5">
            @if (!auth()->check())
            <a class="font-light text-white duration-100 hover:text-yellow-400 hover:underline"
                href="{{ route('login') }}">Login</a>

            <span class="text-white">&#124;</span>

            <a class="font-light text-white duration-100 hover:text-yellow-400 hover:underline"
                href="{{ route('register') }}">Sign
                Up</a>
            @else
            <!-- Logout Form -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="font-light text-white duration-100 hover:text-yellow-400 hover:underline"
                href="{{ route('register') }}">Log Out</a>
            @endif
        </div>

    </div>
</nav>
<!-- End Nav bar -->

<!-- Start Mega Menu -->
<section x-show="megaMenu" @click.outside="megaMenu = false"
    class="absolute left-0 right-0 z-10 w-full border-b border-r border-l bg-white" style="display: none">
    <div class="mx-auto flex max-w-screen-xl py-10" x-data="{ activeCategory: 'Bedroom' }">
        <!-- Left Side: Categories List -->
        <div class="w-[300px] border-r">
            <ul class="px-5">
                <!-- Bedroom -->
                <li @click="activeCategory = 'Bedroom'"
                    :class="activeCategory === 'Bedroom' ? 'bg-amber-400' : 'hover:bg-neutral-100'"
                    class="flex items-center gap-2 py-2 px-3 cursor-pointer">
                    <img width="15px" height="15px" src="{{ asset('resources/images/bed.svg') }}" alt="Bedroom icon" />
                    Bedroom
                    <span class="ml-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                </li>

                <!-- Matrass -->
                <li @click="activeCategory = 'Matrass'"
                    :class="activeCategory === 'Matrass' ? 'bg-amber-400' : 'hover:bg-neutral-100'"
                    class="flex items-center gap-2 py-2 px-3 cursor-pointer">
                    <img width="15px" height="15px" src="{{ asset('resources/images/sleep.svg') }}"
                        alt="Matrass icon" />
                    Matrass
                    <span class="ml-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                </li>

                <!-- Outdoor -->
                <li @click="activeCategory = 'Outdoor'"
                    :class="activeCategory === 'Outdoor' ? 'bg-amber-400' : 'hover:bg-neutral-100'"
                    class="flex items-center gap-2 py-2 px-3 cursor-pointer">
                    <img width="15px" height="15px" src="{{ asset('resources/images/outdoor.svg') }}"
                        alt="Outdoor icon" />
                    Outdoor
                    <span class="ml-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                </li>

                <!-- Sofa -->
                <li @click="activeCategory = 'Sofa'"
                    :class="activeCategory === 'Sofa' ? 'bg-amber-400' : 'hover:bg-neutral-100'"
                    class="flex items-center gap-2 py-2 px-3 cursor-pointer">
                    <img width="15px" height="15px" src="{{ asset('resources/images/sofa.svg') }}" alt="Sofa icon" />
                    Sofa
                    <span class="ml-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                </li>

                <!-- Kitchen -->
                <li @click="activeCategory = 'Kitchen'"
                    :class="activeCategory === 'Kitchen' ? 'bg-amber-400' : 'hover:bg-neutral-100'"
                    class="flex items-center gap-2 py-2 px-3 cursor-pointer">
                    <img width="15px" height="15px" src="{{ asset('resources/images/kitchen.svg') }}"
                        alt="Kitchen icon" />
                    Kitchen
                    <span class="ml-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                </li>

                <!-- Living Room -->
                <li @click="activeCategory = 'Living Room'"
                    :class="activeCategory === 'Living Room' ? 'bg-amber-400' : 'hover:bg-neutral-100'"
                    class="flex items-center gap-2 py-2 px-3 cursor-pointer">
                    <img width="15px" height="15px" src="{{ asset('resources/images/food.svg') }}"
                        alt="Living Room icon" />
                    Living Room
                    <span class="ml-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-4 w-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </span>
                </li>
            </ul>
        </div>

        <!-- Right Side: Dynamic Content Based on Selected Category -->
        <div class="flex w-full justify-between">
            <!-- Bedroom Template -->
            <template x-if="activeCategory === 'Bedroom'">
                <!-- Bedroom content here -->
                <div class="flex gap-6">
                    <div class="mx-5">
                        <p class="font-medium text-gray-500">BEDS</p>
                        <ul class="text-sm leading-8">
                            <li><a href="product-overview.html">Italian bed</a></li>
                            <li><a href="product-overview.html">Queen-size bed</a></li>
                            <li><a href="product-overview.html">Wooden craft bed</a></li>
                            <li><a href="product-overview.html">King-size bed</a></li>
                        </ul>
                    </div>
                    <div class="mx-5">
                        <p class="font-medium text-gray-500">LAMPS</p>
                        <ul class="text-sm leading-8">
                            <li><a href="product-overview.html">Italian Purple Lamp</a></li>
                            <li><a href="product-overview.html">APEX Lamp</a></li>
                            <li><a href="product-overview.html">PIXAR lamp</a></li>
                            <li><a href="product-overview.html">Ambient Nightlamp</a></li>
                        </ul>
                    </div>
                </div>
            </template>
            <!-- Matrass Template -->
            <template x-if="activeCategory === 'Matrass'">
                <!-- Matrass content here -->
                <div class="flex gap-6">
                    <div class="mx-5">
                        <p class="font-medium text-gray-500">MATTRESSES</p>
                        <ul class="text-sm leading-8">
                            <li><a href="product-overview.html">Memory Foam Mattress</a></li>
                            <li><a href="product-overview.html">Spring Mattress</a></li>
                            <li><a href="product-overview.html">Latex Mattress</a></li>
                            <li><a href="product-overview.html">Hybrid Mattress</a></li>
                        </ul>
                    </div>
                </div>
            </template>
            <!-- Outdoor Template -->
            <template x-if="activeCategory === 'Outdoor'">
                <!-- Outdoor content here -->
                <div class="flex gap-6">
                    <div class="mx-5">
                        <p class="font-medium text-gray-500">OUTDOOR FURNITURE</p>
                        <ul class="text-sm leading-8">
                            <li><a href="product-overview.html">Patio Chairs</a></li>
                            <li><a href="product-overview.html">Outdoor Tables</a></li>
                            <li><a href="product-overview.html">Garden Benches</a></li>
                            <li><a href="product-overview.html">Sun Loungers</a></li>
                        </ul>
                    </div>
                </div>
            </template>
            <!-- Sofa Template -->
            <template x-if="activeCategory === 'Sofa'">
                <!-- Sofa content here -->
                <div class="flex gap-6">
                    <div class="mx-5">
                        <p class="font-medium text-gray-500">SOFAS</p>
                        <ul class="text-sm leading-8">
                            <li><a href="product-overview.html">Leather Sofa</a></li>
                            <li><a href="product-overview.html">Fabric Sofa</a></li>
                            <li><a href="product-overview.html">Recliner Sofa</a></li>
                            <li><a href="product-overview.html">Sectional Sofa</a></li>
                        </ul>
                    </div>
                    <div class="mx-5">
                        <p class="font-medium text-gray-500">LOUNGE CHAIRS</p>
                        <ul class="text-sm leading-8">
                            <li><a href="product-overview.html">Armchair</a></li>
                            <li><a href="product-overview.html">Accent Chair</a></li>
                            <li><a href="product-overview.html">Rocking Chair</a></li>
                            <li><a href="product-overview.html">Bean Bag Chair</a></li>
                        </ul>
                    </div>
                </div>
            </template>
            <!-- Kitchen Template -->
            <template x-if="activeCategory === 'Kitchen'">
                <!-- Kitchen content here -->
                <div class="flex gap-6">
                    <div class="mx-5">
                        <p class="font-medium text-gray-500">KITCHEN CABINETS</p>
                        <ul class="text-sm leading-8">
                            <li><a href="product-overview.html">Wall Cabinets</a></li>
                            <li><a href="product-overview.html">Base Cabinets</a></li>
                            <li><a href="product-overview.html">Pantry Cabinets</a></li>
                            <li><a href="product-overview.html">Corner Cabinets</a></li>
                        </ul>
                    </div>
                    <div class="mx-5">
                        <p class="font-medium text-gray-500">KITCHEN APPLIANCES</p>
                        <ul class="text-sm leading-8">
                            <li><a href="product-overview.html">Refrigerators</a></li>
                            <li><a href="product-overview.html">Microwaves</a></li>
                            <li><a href="product-overview.html">Blenders</a></li>
                            <li><a href="product-overview.html">Coffee Makers</a></li>
                        </ul>
                    </div>
                    <div class="mx-5">
                        <p class="font-medium text-gray-500">KITCHEN UTENSILS</p>
                        <ul class="text-sm leading-8">
                            <li><a href="product-overview.html">Cutlery Sets</a></li>
                            <li><a href="product-overview.html">Cookware Sets</a></li>
                            <li><a href="product-overview.html">Bakeware</a></li>
                            <li><a href="product-overview.html">Kitchen Tools</a></li>
                        </ul>
                    </div>
                </div>
            </template>
            <!-- Living Room Template -->
            <template x-if="activeCategory === 'Living Room'">
                <!-- Living Room content here -->
                <div class="flex gap-6">
                    <div class="mx-5">
                        <p class="font-medium text-gray-500">LIVING ROOM FURNITURE</p>
                        <ul class="text-sm leading-8">
                            <li><a href="product-overview.html">Coffee Tables</a></li>
                            <li><a href="product-overview.html">TV Stands</a></li>
                            <li><a href="product-overview.html">Bookshelves</a></li>
                            <li><a href="product-overview.html">Console Tables</a></li>
                        </ul>
                    </div>
                    <div class="mx-5">
                        <p class="font-medium text-gray-500">DECOR</p>
                        <ul class="text-sm leading-8">
                            <li><a href="product-overview.html">Wall Art</a></li>
                            <li><a href="product-overview.html">Vases</a></li>
                            <li><a href="product-overview.html">Decorative Pillows</a></li>
                            <li><a href="product-overview.html">Rugs</a></li>
                        </ul>
                    </div>
                    <div class="mx-5">
                        <p class="font-medium text-gray-500">LIGHTING</p>
                        <ul class="text-sm leading-8">
                            <li><a href="product-overview.html">Floor Lamps</a></li>
                            <li><a href="product-overview.html">Table Lamps</a></li>
                            <li><a href="product-overview.html">Chandeliers</a></li>
                            <li><a href="product-overview.html">Pendant Lights</a></li>
                        </ul>
                    </div>
                </div>
            </template>
        </div>
    </div>
</section>
<!-- End Mega Menu -->