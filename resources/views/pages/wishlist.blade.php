@extends('layouts.infolayout')
@section('title')
- Wishlist
@endsection
{{-- breadcrumbs --}}
@section('breadcrumbs')
<x-breadcrumbs message="Wishlist" />
@endsection
{{-- info-content --}}
@section('info-content')

<!-- Mobile product cards  -->
<section class="mx-auto container grid grid-cols-2 gap-5 px-5 pb-10 md:hidden">
    <!-- 1 -->
    <div class="flex flex-col">
        <div class="relative flex">
            <img class="" src="{{ asset('resources/images/product-chair.png') }}" alt="sofa image" />
            <div
                class="absolute flex h-full w-full items-center justify-center gap-3 opacity-0 duration-150 hover:opacity-100">
                <span class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </span>
                <span class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                        <path
                            d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                    </svg>
                </span>
            </div>
        </div>

        <div>
            <p class="mt-2">CHAIR</p>
            <p class="font-medium text-violet-900">$45.00</p>
            <p>Availability: <span class="text-green-600">In stock</span></p>

            <div class="flex items-center gap-3">
                <button class="my-5 h-10 w-full bg-violet-900 text-white">
                    Add to cart
                </button>
                <i class="cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor" class="h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z"
                            clip-rule="evenodd" />
                    </svg>
                </i>
            </div>
        </div>
    </div>

    <!-- 2 -->
    <div class="flex flex-col">
        <div class="relative flex">
            <img class="" src="{{ asset('resources/images/product-chair.png') }}" alt="sofa image" />
            <div
                class="absolute flex h-full w-full items-center justify-center gap-3 opacity-0 duration-150 hover:opacity-100">
                <span class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </span>
                <span class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                        <path
                            d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                    </svg>
                </span>
            </div>
        </div>

        <div>
            <p class="mt-2">CHAIR</p>
            <p class="font-medium text-violet-900">$45.00</p>
            <p>Availability: <span class="text-green-600">In stock</span></p>

            <div class="flex items-center gap-3">
                <button class="my-5 h-10 w-full bg-violet-900 text-white">
                    Add to cart
                </button>
                <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z"
                            clip-rule="evenodd" />
                    </svg>
                </i>
            </div>
        </div>
    </div>

    <!-- 3 -->
    <div class="flex flex-col">
        <div class="relative flex">
            <img class="" src="{{ asset('resources/images/product-chair.png') }}" alt="sofa image" />
            <div
                class="absolute flex h-full w-full items-center justify-center gap-3 opacity-0 duration-150 hover:opacity-100">
                <span class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </span>
                <span class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                        <path
                            d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                    </svg>
                </span>
            </div>
        </div>

        <div>
            <p class="mt-2">CHAIR</p>
            <p class="font-medium text-violet-900">$45.00</p>
            <p>
                Availability: <span class="text-red-600">Out of stock</span>
            </p>

            <div class="flex items-center gap-3">
                <button class="my-5 h-10 w-full bg-violet-900 text-white">
                    Add to cart
                </button>
                <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z"
                            clip-rule="evenodd" />
                    </svg>
                </i>
            </div>
        </div>
    </div>

    <!-- 4 -->
    <div class="flex flex-col">
        <div class="relative flex">
            <img class="" src="{{ asset('resources/images/product-chair.png') }}" alt="sofa image" />
            <div
                class="absolute flex h-full w-full items-center justify-center gap-3 opacity-0 duration-150 hover:opacity-100">
                <span class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                </span>
                <span class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                        <path
                            d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                    </svg>
                </span>
            </div>
        </div>

        <div>
            <p class="mt-2">CHAIR</p>
            <p class="font-medium text-violet-900">$45.00</p>
            <p>
                Availability: <span class="text-red-600">Out of stock</span>
            </p>

            <div class="flex items-center gap-3">
                <button class="my-5 h-10 w-full bg-violet-900 text-white">
                    Add to cart
                </button>
                <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z"
                            clip-rule="evenodd" />
                    </svg>
                </i>
            </div>
        </div>
    </div>
</section>
<!-- /Mobile product cards  -->

<!-- Desktop product cards  -->
<section class="hidden w-full max-w-screen-xl grid-cols-1 gap-8 px-5 pb-10 md:grid">
    <!-- 1 -->
    <div class="flex w-full flex-row h-44 items-center justify-between border py-5 px-4">
        <div class="flex w-full items-center gap-4">
            <img width="100px" class="object-cover" src="{{ asset('resources/images/kitchen.png') }}"
                alt="Kitchen image" />

            <div class="flex w-2/5 flex-col justify-center">
                <p class="text-xl font-bold">ITALIAN KITCHEN</p>
                <p class="text-gray-500">
                    Availability:
                    <span class="font-medium text-green-600">In Stock</span>
                </p>
            </div>
        </div>

        <div class="flex w-3/5 items-center justify-between flex-row">
            <p class="mt-2 text-xl font-bold text-violet-900">$320.00</p>

            <div class="mt-2 flex items-center">
                <button class="w-full px-2 bg-amber-400 py-2 lg:px-5">
                    Add to cart
                </button>

                <i class="ml-5 cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor" class="h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z"
                            clip-rule="evenodd" />
                    </svg>
                </i>
            </div>
        </div>
    </div>

    <div class="flex w-full h-44 flex-row items-center justify-between border py-5 px-4">
        <div class="flex w-full items-center gap-4">
            <img width="100px" class="object-cover" src="{{ asset('resources/images/bedroom.png') }}"
                alt="Bedroom image" />

            <div class="flex flex-col justify-center">
                <p class="text-xl font-bold">QUEEN SIZE BED</p>
                <p class="text-gray-500">
                    Availability:
                    <span class="font-medium text-green-600">In Stock</span>
                </p>
            </div>
        </div>

        <div class="flex w-3/5 items-center justify-between flex-row">
            <p class="mt-2 text-xl font-bold text-violet-900">$320.00</p>

            <div class="mt-2 flex items-center">
                <button class="w-full px-2 bg-amber-400 py-2 lg:px-5">
                    Add to cart
                </button>

                <i class="ml-5 cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor" class="h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z"
                            clip-rule="evenodd" />
                    </svg>
                </i>
            </div>
        </div>
    </div>

    <div class="flex w-full h-44 flex-row items-center justify-between border py-5 px-4">
        <div class="flex w-full items-center gap-4">
            <img width="100px" class="object-cover" src="{{ asset('resources/images/living-room.png') }}"
                alt="Sofa image" />

            <div class="flex flex-col justify-center">
                <p class="text-xl font-bold">LARGE SOFA</p>
                <p class="text-gray-500">
                    Availability:
                    <span class="font-medium text-green-600">In Stock</span>
                </p>
            </div>
        </div>

        <div class="flex w-3/5 items-center justify-between flex-row">
            <p class="mt-2 text-xl font-bold text-violet-900">$320.00</p>

            <div class="mt-2 flex items-center">
                <button class="w-full px-2 bg-amber-400 py-2 lg:px-5">
                    Add to cart
                </button>

                <i class="ml-5 cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor" class="h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z"
                            clip-rule="evenodd" />
                    </svg>
                </i>
            </div>
        </div>
    </div>

    <div class="flex w-full h-44 flex-row items-center justify-between border py-5 px-4">
        <div class="flex w-full items-center gap-4">
            <img width="100px" class="object-cover" src="{{ asset('resources/images/product-chair.png') }}"
                alt="Chair image" />

            <div class="flex flex-col justify-center">
                <p class="text-xl font-bold">CHAIR PURPLE</p>
                <p class="text-gray-500">
                    Availability:
                    <span class="font-medium text-red-600">Out of Stock</span>
                </p>
            </div>
        </div>

        <div class="flex w-3/5 items-center justify-between flex-row">
            <p class="mt-2 text-xl font-bold text-violet-900">$320.00</p>

            <div class="mt-2 flex items-center">
                <button class="w-full px-2 bg-amber-400 py-2 lg:px-5">
                    Add to cart
                </button>

                <i class="ml-5 cursor-pointer"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor" class="h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z"
                            clip-rule="evenodd" />
                    </svg>
                </i>
            </div>
        </div>
    </div>
</section>
<!-- /Desktop product cards  -->
@endsection