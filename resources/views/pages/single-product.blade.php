@extends('layouts.masterlayout')

@section('content')
{{-- breadcrumbs --}}
<x-breadcrumbs :message="$product->name" />
<section class="container flex-grow mx-auto max-w-[1200px] border-b py-5 lg:grid lg:grid-cols-2 lg:py-10">
    <!-- Image Gallery -->
    <div class="container mx-auto px-4">
        <img class="w-full" src="{{ asset($product->image) }}" alt="{{ $product->name }}" />

        <div class="mt-3 grid grid-cols-4 gap-4">
            @foreach(json_decode($product->images) as $image)
            <div>
                <img class="cursor-pointer" src="{{ asset($image) }}" alt="{{ $product->name }}" />
            </div>
            @endforeach
        </div>
    </div>

    <!-- Description -->
    <div class="mx-auto px-5 lg:px-5">
        <h2 class="pt-3 text-2xl font-bold lg:pt-0">{{ $product->name }}</h2>
        <div class="mt-1">
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

        <p class="mt-5 font-bold">
            Availability: <span class="text-green-600">{{ $product->availability }}</span>
        </p>
        <p class="font-bold">Brand: <span class="font-normal">{{ $product->brand }}</span></p>
        <p class="font-bold">Category: <span class="font-normal">{{ $product->category }}</span></p>
        <p class="font-bold">SKU: <span class="font-normal">{{ $product->sku }}</span></p>

        <p class="mt-4 text-4xl font-bold text-violet-900">
            ${{ $product->price }} <span class="text-xs text-gray-400 line-through">${{ $product->discount_price
                }}</span>
        </p>

        <p class="pt-5 text-sm leading-5 text-gray-500">{{ $product->description }}</p>

        <!-- Sizes -->
        <div class="mt-6">
            <p class="pb-2 text-xs text-gray-500">Size</p>
            <div class="flex gap-1">
                @foreach(json_decode($product->sizes) as $size)
                <div
                    class="flex h-8 w-auto px-2 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                    {{ $size }}
                </div>
                @endforeach
            </div>
        </div>

        <!-- Colors -->
        <div class="mt-6">
            <p class="pb-2 text-xs text-gray-500">Color</p>
            <div class="flex gap-1">
                @foreach(json_decode($product->colors) as $color)
                <div class="h-8 w-8 cursor-pointer border border-white" style="background-color: {{ $color }};"></div>
                @endforeach
            </div>
        </div>

        <!-- Quantity -->
        <div class="mt-6">
            <p class="pb-2 text-xs text-gray-500">Quantity</p>
            <div class="flex">
                <button
                    class="flex h-8 w-8 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                    &minus;
                </button>
                <div
                    class="flex h-8 w-8 cursor-text items-center justify-center border-t border-b active:ring-gray-500">
                    1
                </div>
                <button
                    class="flex h-8 w-8 cursor-pointer items-center justify-center border duration-100 hover:bg-neutral-100 focus:ring-2 focus:ring-gray-500 active:ring-2 active:ring-gray-500">
                    &#43;
                </button>
            </div>
        </div>

        <!-- Buttons -->
        <div class="mt-7 flex flex-row items-center gap-6">
            <button
                class="flex h-12 w-1/3 items-center justify-center bg-violet-900 text-white duration-100 hover:bg-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="mr-3 h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
                Add to cart
            </button>
            <button class="flex h-12 w-1/3 items-center justify-center bg-amber-400 duration-100 hover:bg-yellow-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="mr-3 h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
                Wishlist
            </button>
        </div>
    </div>
</section>

<!-- Product Details -->
<section class="container mx-auto max-w-[1200px] px-5 py-5 lg:py-10">
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