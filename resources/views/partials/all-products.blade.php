<section class="container w-full max-w-[1200px] mx-auto pb-10">
    <p class="mb-5 px-5">RECOMMENDED FOR YOU</p>
    <div class="grid grid-cols-2 gap-3 px-5 lg:grid-cols-4">
        @foreach($products as $product)
            <div class="flex flex-col">
                <div class="relative flex">
                    <img class="" src="{{ asset($product->image) }}" alt="{{ $product->name }}" />
                    <div class="absolute flex h-full w-full items-center justify-center gap-3 opacity-0 duration-150 hover:opacity-100">
                        <a href="{{ route('product-overview', $product->id) }}">
                            <span class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </span>
                        </a>
                        <span class="flex h-8 w-8 cursor-pointer items-center justify-center rounded-full bg-amber-400">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                                <path d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                            </svg>
                        </span>
                    </div>

                    @if($product->discount_price)
                        <div class="absolute right-1 mt-3 flex items-center justify-center bg-amber-400">
                            <p class="px-2 py-2 text-sm">&minus; 25&percnt; OFF</p>
                        </div>
                    @endif
                </div>

                <div>
                    <p class="mt-2 h-11 leading-5 overflow-hidden">{{ $product->name }}</p>
                    <p class="font-medium text-violet-900">
                        ${{ $product->price }}
                        @if($product->discount_price)
                            <span class="text-sm text-gray-500 line-through">${{ $product->discount_price }}</span>
                        @endif
                    </p>

                    <div class="flex items-center">
                        @for($i = 1; $i <= 5; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-4 w-4 {{ $i <= $product->rating ? 'text-yellow-400' : 'text-gray-200' }}">
                                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                            </svg>
                        @endfor
                        <p class="text-sm text-gray-400">({{ $product->review_count }})</p>
                    </div>

                    <div>
                        <button class="my-2 h-10 w-full bg-violet-900 text-white">
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="flex justify-center justify-items-center mt-10">
        <a href="{{ route('all-products') }}" class="text-black max-w-32 w-28 border hover:scale-105 hover:border-2 border-violet-800 hover:border-violet-900 font-medium text-sm px-5 py-2.5 focus:outline-none text-center mx-auto transition">View All</a>
    </div>
</section>