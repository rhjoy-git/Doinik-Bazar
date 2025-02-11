<section class="container w-full max-w-[1200px] mx-auto py-10">
    <p class="mx-auto mb-5 px-5">TOP NEW ARRIVAL</p>
    <div class="splide px-5 py-2">
        <div class="splide__track">
            <ul class="splide__list mx-auto max-w-[1200px]">
                @foreach($products as $product)
                @if($product->is_new_arrival)
                <li class="splide__slide">
                    <a href="{{ route('product-overview', $product->id) }}" class="block">
                        <div class="flex flex-col">
                            <img class="" src="{{ asset($product->image) }}" alt="{{ $product->name }}" />
                            <div>
                                <p class="mt-2">{{ $product->name }}</p>
                                <p class="font-medium text-violet-900">
                                    ${{ $product->price }}
                                    <span class="text-sm text-gray-500 line-through">${{ $product->original_price
                                        }}</span>
                                </p>
                                <!-- Rating and Add to Cart Button -->
                                <div class="flex items-center">
                                    <!-- Rating Stars -->
                                    <div class="flex items-center">
                                        @for($i = 0; $i < 5; $i++) @if($i < $product->rating)
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-4 w-4 text-yellow-400">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            @else
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" class="h-4 w-4 text-gray-200">
                                                <path fill-rule="evenodd"
                                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            @endif
                                            @endfor
                                            <p class="text-sm text-gray-400">({{ $product->review_count }})</p>
                                    </div>
                                </div>
                                <!-- Add to Cart Button -->
                                <div>
                                    <button class="my-5 h-10 w-full bg-violet-900 text-white">
                                        Add to cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
</section>