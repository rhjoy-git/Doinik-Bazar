<section class="container w-full max-w-screen-xl mx-auto py-10">
    <p class="mx-auto mb-5 px-5">TOP NEW ARRIVAL</p>
    <div class="splide px-5 py-2">
        <div class="splide__track">
            <ul class="splide__list mx-auto max-w-screen-xl">
                @foreach($products as $product)
                @if($product->is_new_arrival)
                <li class="splide__slide">
                    <div class="rounded-lg border border-gray-200 bg-white shadow-sm">
                        <div class="">
                            <a href="{{ route('product-overview', $product->id) }}">
                                <img class="mx-auto w-full h-auto" src="{{ asset($product->image) }}" alt="{{ $product->name }}" />
                            </a>
                        </div>
                        <div class="px-4 pt-2 pb-4">
                            <div class="mb-2 flex items-center justify-between gap-4">
                                @if ($product->discount_price)
                                <span
                                    class="me-2 rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 text-left">{{
                                    round((($product->price - $product->discount_price) / $product->price) * 100) }}% off
                                </span>
                                @endif
            
                                <div class="flex items-center justify-end gap-1 relative">
                                    <!-- Quick Look Button -->
                                    <button type="button" data-tooltip-target="tooltip-quick-look-{{ $product->id }}"
                                        class="rounded-lg p-1 text-gray-500 hover:bg-gray-100 hover:text-gray-900">
                                        <span class="sr-only"> Quick look </span>
                                        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-width="2"
                                                d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                                            <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                    </button>
                                    <div id="tooltip-quick-look-{{ $product->id }}" role="tooltip"
                                        class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300"
                                        data-popper-placement="top">
                                        Quick look
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
            
                                    <!-- Add to Favorites Button -->
                                    <button type="button" data-tooltip-target="tooltip-add-to-favorites-{{ $product->id }}"
                                        class="rounded-lg p-1 text-gray-500 hover:bg-gray-100 hover:text-gray-900">
                                        <span class="sr-only"> Add to Favorites </span>
                                        <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M12 6C6.5 1 1 8 5.8 13l6.2 7 6.2-7C23 8 17.5 1 12 6Z" />
                                        </svg>
                                    </button>
                                    <div id="tooltip-add-to-favorites-{{ $product->id }}" role="tooltip"
                                        class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300"
                                        data-popper-placement="top">
                                        Add to favorites
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
            
                            <a href="{{ route('product-overview', $product->id) }}"
                                class="text-base font-semibold leading-5 overflow-hidden text-gray-900 hover:underline">
                                {{ Str::limit($product->name, 20, '...') }}
                            </a>
            
                            <!-- Rating Section -->
                            <div class="mt-1 flex items-center gap-2">
                                <div class="flex items-center">
                                    @for ($i = 1; $i <= 5; $i++) @if ($i <=$product->rating)
                                        <svg class="h-4 w-4 text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                                        </svg>
                                        @else
                                        <svg class="h-4 w-4 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13.8 4.2a2 2 0 0 0-3.6 0L8.4 8.4l-4.6.3a2 2 0 0 0-1.1 3.5l3.5 3-1 4.4c-.5 1.7 1.4 3 2.9 2.1l3.9-2.3 3.9 2.3c1.5 1 3.4-.4 3-2.1l-1-4.4 3.4-3a2 2 0 0 0-1.1-3.5l-4.6-.3-1.8-4.2Z" />
                                        </svg>
                                        @endif
                                        @endfor
                                </div>
                                <p class="text-sm font-medium text-gray-900">{{ number_format($product->rating, 1) }}</p>
                                <p class="text-sm font-medium text-gray-500">({{ $product->review_count }})</p>
                            </div>
            
                            <!-- Additional Info -->
                            <div class="flex items-center mt-2">
                                <svg class="h-4 w-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                                </svg>
                                <p class="text-sm font-medium text-gray-500">Fast Delivery</p>
                            </div>
            
                            <!-- Price and Add to Cart -->
                            <div class="mt-2 flex items-center justify-between gap-2">
                                <p class="text-lg font-extrabold leading-tight text-gray-900">
                                    ${{ number_format($product->price, 2) }}
                                </p>
                                @if ($product->discount_price)
                                <p class="text-lg font-medium leading-tight text-gray-900">
                                    <span class="text-sm text-gray-500 line-through">${{ number_format($product->discount_price, 2)
                                        }}</span>
                                </p>
                                @endif
            
                                <a href="#" class="border p-1.5 rounded-md hover:bg-blue-600 hover:text-white">
                                    <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
</section>