<x-checkout type="bg-neutral-600 text-white" id="address">
    <div class="py-5">
        <form class="flex w-full flex-col gap-3" action="/submit" method="post">
            @csrf
            <div class="flex w-full justify-between gap-2">
                <div class="flex w-1/2 flex-col">
                    <label class="flex" for="fullname">Full Name<span
                            class="block text-sm font-medium text-slate-700 after:ml-0.5 after:text-red-500 after:content-['*']"></span></label>
                    <input class="w-full border px-4 py-2 outline-yellow-400" type="text"
                        placeholder="Rakibul Hasan Joy" name="fullname" id="fullname" required />
                </div>
                <div class="flex w-1/2 flex-col">
                    <label class="flex" for="tel">Phone Number<span
                            class="block text-sm font-medium text-slate-700 after:ml-0.5 after:text-red-500 after:content-['*']"></span></label>
                    <input class="w-full border px-4 py-2 outline-yellow-400" type="tel" id="tel"
                        placeholder="01714532308" name="tel" required />
                </div>
            </div>
            <div class="flex w-full justify-between gap-2">
                <div class="flex w-1/2 flex-col">
                    <label class="flex" for="division">Division<span
                            class="block text-sm font-medium text-slate-700 after:ml-0.5 after:text-red-500 after:content-['*']"></span></label>
                    <input class="w-full border px-4 py-2 outline-yellow-400" type="text"
                        placeholder="Big Serbian avenue, 18" name="division" required />
                </div>
                <div class="flex w-1/2 flex-col">
                    <label class="flex" for="city">City<span
                            class="block text-sm font-medium text-slate-700 after:ml-0.5 after:text-red-500 after:content-['*']"></span></label>
                    <input class="w-full border px-4 py-2 outline-yellow-400" type="text" placeholder="Belgrade"
                        name="city" id="city" />
                </div>
            </div>
            <div class="flex w-full justify-between gap-2">
                <div class="flex w-1/2 flex-col">
                    <label class="flex" for="zip">ZIP code<span
                            class="block text-sm font-medium text-slate-700 after:ml-0.5 after:text-red-500 after:content-['*']"></span></label>
                    <input x-mask="999999" class="w-full border px-4 py-2 outline-yellow-400" placeholder="176356"
                        name="zip" required />
                </div>
                <div class="flex w-1/2 flex-col">
                    <label class="flex" for="email">Email</label>
                    <input class="w-full border px-4 py-2 outline-yellow-400" type="email"
                        placeholder="rakibulhasanjoy009@gmail.com" name="email" id="email" />
                </div>
            </div>
            <div class="flex flex-col">
                <label for="commentary">Commentary</label>
                <textarea class="border px-4 py-2 outline-yellow-400" name="commentary" maxlength="50"></textarea>
            </div>
        </form>
        <div class="flex w-full items-center justify-between mt-5">
            <a href="{{route('all-products')}}" class="text-sm text-violet-900">&larr; Back to the shop</a>

            {{ $component->checkoutLink(route('checkout.delivery'), 'Place an order') }}

        </div>
    </div>
</x-checkout>