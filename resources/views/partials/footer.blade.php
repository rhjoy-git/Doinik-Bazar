<footer>
    <section class="mx-auto w-full max-w-screen-xl justify-between pb-10 flex flex-col lg:flex-row">
        <div class="ml-5">
            <img class="mt-10 mb-5 h-6 w-auto" src="{{ asset('resources/images/dblogo.png') }}" alt="company logo" />
            <p class="pl-0">
                Lorem ipsum dolor sit amet consectetur <br />
                adipisicing elit.
            </p>
            <div class="mt-10 flex gap-3">
                <a href="https://github.com/rhjoy-git">
                    <img class="h-5 w-5 cursor-pointer" src="{{ asset('resources/images/github.svg') }}"
                        alt="github icon" />
                </a>
                <a href="https://www.linkedin.com/in/rhjoy/">
                    <img class="h-5 w-5 cursor-pointer" src="{{ asset('resources/images/linkedin.svg') }}"
                        alt="linkedin icon" />
                </a>
                <a href="https://rhjoy-git.github.io/rakibulhasanjoy/">
                    <img class="h-5 w-5 cursor-pointer" src="{{ asset('resources/images/telegram.svg') }}"
                        alt="web icon" />
                </a>
            </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="mx-5 mt-10">
                <p class="font-medium text-gray-500">FEATURES</p>
                <ul class="text-sm leading-8">
                    <li><a href="#">Marketing</a></li>
                    <li><a href="#">Commerce</a></li>
                    <li><a href="#">Analytics</a></li>
                    <li><a href="#">Merchendise</a></li>
                </ul>
            </div>
            <div class="mx-5 mt-10">
                <p class="font-medium text-gray-500">SUPPORT</p>
                <ul class="text-sm leading-8">
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Docs</a></li>
                    <li><a href="#">Audition</a></li>
                    <li><a href="#">Art Status</a></li>
                </ul>
            </div>
            <div class="mx-5 mt-10">
                <p class="font-medium text-gray-500">DOCUMENTS</p>
                <ul class="text-sm leading-8">
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Conditions</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">License</a></li>
                </ul>
            </div>
            <div class="mx-5 mt-10">
                <p class="font-medium text-gray-500">DELIVERY</p>
                <ul class="text-sm leading-8">
                    <li><a href="#">List of countries</a></li>
                    <li><a href="#">Special information</a></li>
                    <li><a href="#">Restrictions</a></li>
                    <li><a href="#">Payment</a></li>
                </ul>
            </div>
        </div>

    </section>
    <!-- Payment and copyright  -->

    <section class="bg-white shadow mt-8">
        <div class="container mx-auto">
            <div class="text-center">
                <!-- Copyright Text -->
                <p class="text-gray-700">
                    &copy; {{ date('Y') }} Your Website. All rights reserved.
                </p>

                <!-- Optional: Additional Links -->
                <section class="h-11 bg-amber-400 mt-3">
                    <div class="mx-auto flex max-w-screen-xl items-center justify-between px-4 pt-2">
                        <div class="space-x-4">
                            <a href="{{ route('about-us') }}" class="text-gray-700 hover:text-violet-900">About Us</a>
                            <a href="{{ route('contact-us') }}" class="text-gray-700 hover:text-violet-900">Contact
                                Us</a>
                            <a href="#" class="text-gray-700 hover:text-violet-900">Privacy Policy</a>
                            <a href="#" class="text-gray-700 hover:text-violet-900">Terms of Service</a>
                        </div>
                        <!-- Payment Methods Section -->
                        <div class="flex justify-center items-center space-x-4">
                            <img src="https://cdn-icons-png.flaticon.com/512/5968/5968299.png" alt="Visa" class="h-8">
                            <img src="https://cdn-icons-png.flaticon.com/512/349/349228.png" alt="Mastercard"
                                class="h-8">
                            <img src="https://cdn-icons-png.flaticon.com/512/5968/5968144.png" alt="PayPal" class="h-8">
                            {{-- <img src="{{ asset('images/payment-methods/amazon-pay.png') }}" alt="Amazon Pay"
                                class="h-8"> --}}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</footer>