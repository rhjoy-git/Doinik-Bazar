@extends('layouts.masterlayout')

@section('content')
{{-- breadcrumbs --}}
<x-breadcrumbs :message="$product->name" />
<!-- Product Details -->
<section class="container flex-grow mx-auto max-w-screen-xl border-b py-5 lg:grid lg:grid-cols-2 lg:py-10">
    <!-- Image Gallery -->
    <div class="container mx-auto px-4">
        <div class="relative overflow-hidden transform">
            <img class="w-full" src="{{ asset($product->image) }}" alt="{{ $product->name }}" />
            <!-- Add to Favorites Button -->
            <button type="button" class="absolute top-0 -translate-x-1/2 translate-y-1/2 right-0 rounded p-1 text-white-500 hover:scale-105">
                <span class="sr-only"> Add to Favorites </span>
                <svg class="h-8 w-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="#4c1d95 " stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z" />
                </svg>
            </button>
        </div>
        <div class="mt-3 grid grid-cols-4 gap-4">
            @foreach(json_decode($product->images) as $image)
            <div>
                <img class="cursor-pointer" src="{{ asset($image) }}" alt="{{ $product->name }}" />
            </div>
            @endforeach
        </div>
    </div>
    {{-- Description --}}
    <div class="mx-auto px-5 lg:px-5">
        {{-- Product name --}}
        <h2 class="text-3xl font-bold text-gray-800 mb-2">{{ $product->name }}</h2>
        {{-- Rating --}}
        <div class="mt-1 mb-4">
            <div class="flex items-center">
                @for($i = 1; $i <= 5; $i++) <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                    fill="currentColor"
                    class="h-4 w-4 {{ $i <= $product->rating ? 'text-yellow-400' : 'text-gray-200' }}">
                    <path fill-rule="evenodd"
                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                        clip-rule="evenodd" />
                    </svg>
                    @endfor
                    <p class="ml-3 text-sm text-gray-400">({{ $product->review_count }} reviews)</p>
            </div>
        </div>
        {{-- Price and Desc --}}
        <div class="flex mb-4 gap-3 items-center justify-start">
            <p class="font-bold text-gray-700 ">Price: <span class="text-gray-600 text-xl">${{ $product->price
                    }}</span> <span class="text-sm text-gray-400 line-through">${{ $product->discount_price
                    }}</span>
            </p>
            <p class="font-bold text-gray-700 ">Availability: <span class="text-green-600"> {{
                    $product->availability }} </span></p>
        </div>
        <div class="flex mb-4 gap-3 items-center justify-start">
            <p class="font-bold">Brand: <span class="font-normal">{{ $product->brand }}</span></p>
            <p class="font-bold">Category: <span class="font-normal">{{ $product->category }}</span></p>
            <p class="font-bold">SKU: <span class="font-normal">{{ $product->sku }}</span></p>
        </div>
        {{-- Color --}}
        <div class="mb-4">
            <span class="font-bold text-gray-700 ">Select Color:</span>
            <div class="flex items-center mt-2">
                @foreach(json_decode($product->colors) as $color)
                <button class="w-6 h-6 rounded-full mr-2" style="background-color: {{ $color }};"></button>
                @endforeach
            </div>
        </div>
        {{-- Size --}}
        <div class="mb-4">
            <span class="font-bold text-gray-700 ">Select Size:</span>
            <div class="flex items-center mt-2">
                @foreach(json_decode($product->sizes) as $size)
                <button class="bg-gray-300  text-gray-700  py-2 px-4 rounded-full font-bold mr-2 hover:bg-gray-400 ">{{
                    $size }}</button>
                @endforeach
            </div>
        </div>
        {{-- Quantity --}}
        <div class="flex justify-start items-center gap-2">
            <span class="font-bold text-gray-700 ">Quantity:</span>
            <div class="inline-flex items-center mt-2">
                <button
                    class="bg-white rounded-l border text-gray-600 hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                    </svg>
                </button>
                <div
                    class="bg-gray-100 border-t border-b border-gray-100 text-gray-600 hover:bg-gray-100 inline-flex items-center px-4 py-1 select-none">
                    2
                </div>
                <button
                    class="bg-white rounded-r border text-gray-600 hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50 inline-flex items-center px-2 py-1 border-r border-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                </button>
            </div>
        </div>
        {{-- Action Button --}}
        <div class="flex -mx-2 mb-4 mt-4">
            <div class="w-1/2 px-2">
                <button
                    class="w-full bg-violet-900 text-white duration-100 hover:bg-blue-800 py-2 px-4 rounded-full font-bold">Add
                    to Cart</button>
            </div>
            <div class="w-1/2 px-2">
                <button
                    class="w-full bg-amber-400 duration-100 hover:scale-105 hover:font-bolder py-2 px-4 rounded-full font-bold">Wish List</button>
            </div>
        </div>
    </div>
</section>
<!-- Product Details -->
<section class="container mx-auto max-w-screen-xl px-5 py-5 lg:py-10">
    <h2 class="text-xl">Product details</h2>
    <p class="mt-4 lg:w-3/4">{{ $product->description }}</p>

    <table class="mt-7 w-full table-auto divide-x divide-y lg:w-1/2">
        <tbody class="divide-x border">
            <tr>
                <td class="border pl-4 font-bold">Color</td>
                <td class="border pl-4">{{ implode(', ', json_decode($product->colors)) }}</td>
            </tr>
            <tr>
                <td class="border pl-4 font-bold">Material</td>
                <td class="border pl-4">{{ $product->material }}</td>
            </tr>
            <tr>
                <td class="border pl-4 font-bold">Weight</td>
                <td class="border pl-4">{{ $product->weight }}</td>
            </tr>
        </tbody>
    </table>

</section>
@include('partials.related-products')
@endsection