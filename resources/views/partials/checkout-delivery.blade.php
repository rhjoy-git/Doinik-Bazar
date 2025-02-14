<x-checkout type="bg-neutral-600 text-white">
    <div class="py-5">
        <div class="grid w-full grid-cols-1 gap-5">
            <!-- Delivery Option 1 -->
            <div class="flex w-full cursor-pointer items-center rounded-lg border p-4 transition-all hover:shadow-md">
                <input class="h-5 w-5 accent-blue-500 focus:ring-0 focus:ring-offset-0" type="radio" name="delivery" />
                <div class="ml-4">
                    <p class="text-lg font-semibold">Standard Delivery</p>
                    <p class="text-sm text-gray-600">3-5 business days</p>
                    <p class="mt-2 text-sm text-gray-600">Free</p>
                </div>
            </div>

            <!-- Delivery Option 2 -->
            <div class="flex w-full cursor-pointer items-center rounded-lg border p-4 transition-all hover:shadow-md">
                <input class="h-5 w-5 accent-blue-500 focus:ring-0 focus:ring-offset-0" type="radio" name="delivery" />
                <div class="ml-4">
                    <p class="text-lg font-semibold">Express Delivery</p>
                    <p class="text-sm text-gray-600">1-2 business days</p>
                    <p class="mt-2 text-sm text-gray-600">$10.00</p>
                </div>
            </div>

            <!-- Delivery Option 3 -->
            <div class="flex w-full cursor-pointer items-center rounded-lg border p-4 transition-all hover:shadow-md">
                <input class="h-5 w-5 accent-blue-500 focus:ring-0 focus:ring-offset-0" type="radio" name="delivery" />
                <div class="ml-4">
                    <p class="text-lg font-semibold">Overnight Delivery</p>
                    <p class="text-sm text-gray-600">Next business day</p>
                    <p class="mt-2 text-sm text-gray-600">$20.00</p>
                </div>
            </div>

            <!-- Delivery Option 4 -->
            <div class="flex w-full cursor-pointer items-center rounded-lg border p-4 transition-all hover:shadow-md">
                <input class="h-5 w-5 accent-blue-500 focus:ring-0 focus:ring-offset-0" type="radio" name="delivery" />
                <div class="ml-4">
                    <p class="text-lg font-semibold">International Delivery</p>
                    <p class="text-sm text-gray-600">5-10 business days</p>
                    <p class="mt-2 text-sm text-gray-600">$50.00</p>
                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-between w-full">
        <a href="{{route('all-products')}}" class="text-sm text-violet-900">&larr; Back to the shop</a>
        <div class="flex gap-2 justify-center lg:mx-0 mx-auto">
            <a href="#" class="bg-purple-900 px-4 py-2 text-white">Previous step</a>
            {{ $component->checkoutLink(route('checkout.payment'), 'Payment Method') }}
        </div>
    </div>
</x-checkout>