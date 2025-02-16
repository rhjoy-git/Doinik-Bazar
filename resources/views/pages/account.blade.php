@extends('layouts.infolayout')
@section('title')
- Account
@endsection
{{-- breadcrumbs --}}
@section('breadcrumbs')
<x-breadcrumbs message="Account" />
@endsection
{{-- info-content --}}
@section('info-content')
<section class="bg-white p-8 antialiased md:py-8 ms-10" x-data="{ editPersonalInformation: false }">
    <h2 class="mb-4 text-xl font-semibold text-gray-900  sm:text-2xl md:mb-6">Manage Account</h2>
    <div class="mx-auto max-w-screen-lg px-4 2xl:px-0">
        <div class="py-4 md:py-8">
            <div class="mb-4 grid gap-4 sm:grid-cols-2 sm:gap-8 lg:gap-16">
                <div class="space-y-4">
                    <div class="flex space-x-4">
                        <img class="h-16 w-16 rounded-lg" src="{{asset('resources/images/user.png')}}"
                            alt="{{$user->first_name. " ".$user->last_name}}" />
                        <div>
                            <span
                                class="mb-2 inline-block rounded bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800">
                                PRO Account </span>
                            <h2 class="flex items-center text-xl font-bold leading-none text-gray-900  sm:text-2xl">
                                {{$user->first_name. " ".$user->last_name}}</h2>
                        </div>
                    </div>
                    <dl class="">
                        <dt class="font-semibold text-gray-900 ">Email Address</dt>
                        <dd class="text-gray-500 ">{{$user->email}}</dd>
                    </dl>
                    <dl>
                        <dt class="font-semibold text-gray-900 ">Home Address</dt>
                        <dd class="flex items-center gap-1 text-gray-500 ">
                            <svg class="hidden h-5 w-5 shrink-0 text-gray-400  lg:inline" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
                            </svg>
                            @if ($user->address)
                            {{$user->address}}
                            @else
                            Null
                            @endif
                        </dd>
                    </dl>
                    <dl>
                        <dt class="font-semibold text-gray-900 ">Delivery Address</dt>
                        <dd class="flex items-center gap-1 text-gray-500 ">
                            <svg class="hidden h-5 w-5 shrink-0 text-gray-400  lg:inline" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                            </svg>
                            @if ($user->delivery_address)
                            {{$user->delivery_address}}
                            @else
                            Null
                            @endif
                        </dd>
                    </dl>
                </div>
                <div class="space-y-4">
                    <dl>
                        <dt class="font-semibold text-gray-900 ">Phone Number</dt>
                        <dd class="text-gray-500 ">+88{{$user->phone}}</dd>
                    </dl>
                    <dl>
                        <dt class="font-semibold text-gray-900 ">Favorite pick-up point</dt>
                        <dd class="flex items-center gap-1 text-gray-500 ">
                            <svg class="hidden h-5 w-5 shrink-0 text-gray-400  lg:inline" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M6 12c.263 0 .524-.06.767-.175a2 2 0 0 0 .65-.491c.186-.21.333-.46.433-.734.1-.274.15-.568.15-.864a2.4 2.4 0 0 0 .586 1.591c.375.422.884.659 1.414.659.53 0 1.04-.237 1.414-.659A2.4 2.4 0 0 0 12 9.736a2.4 2.4 0 0 0 .586 1.591c.375.422.884.659 1.414.659.53 0 1.04-.237 1.414-.659A2.4 2.4 0 0 0 16 9.736c0 .295.052.588.152.861s.248.521.434.73a2 2 0 0 0 .649.488 1.809 1.809 0 0 0 1.53 0 2.03 2.03 0 0 0 .65-.488c.185-.209.332-.457.433-.73.1-.273.152-.566.152-.861 0-.974-1.108-3.85-1.618-5.121A.983.983 0 0 0 17.466 4H6.456a.986.986 0 0 0-.93.645C5.045 5.962 4 8.905 4 9.736c.023.59.241 1.148.611 1.567.37.418.865.667 1.389.697Zm0 0c.328 0 .651-.091.94-.266A2.1 2.1 0 0 0 7.66 11h.681a2.1 2.1 0 0 0 .718.734c.29.175.613.266.942.266.328 0 .651-.091.94-.266.29-.174.537-.427.719-.734h.681a2.1 2.1 0 0 0 .719.734c.289.175.612.266.94.266.329 0 .652-.091.942-.266.29-.174.536-.427.718-.734h.681c.183.307.43.56.719.734.29.174.613.266.941.266a1.819 1.819 0 0 0 1.06-.351M6 12a1.766 1.766 0 0 1-1.163-.476M5 12v7a1 1 0 0 0 1 1h2v-5h3v5h7a1 1 0 0 0 1-1v-7m-5 3v2h2v-2h-2Z" />
                            </svg>
                            @if ($user->pickuppoint)
                            {{$user->pickuppoint}}
                            @else
                            Mirpur 10, Dhaka, Bangladesh - 1213
                            @endif
                        </dd>
                    </dl>
                    <dl>
                        <dt class="font-semibold text-gray-900 ">My Companies</dt>
                        <dd class="text-gray-500 ">End Brackets</dd>
                    </dl>
                    <dl>
                        <dt class="mb-1 font-semibold text-gray-900 ">Payment Methods</dt>
                        <dd class="flex items-center space-x-4 text-gray-500 ">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-gray-100 ">
                                <img class="h-auto w-auto" src="{{asset('resources/images/payment-method-visa.svg')}}"
                                    alt="" />

                            </div>
                            <div>
                                @if ($user->address)
                                <div class="text-sm">
                                    <p class="mb-0.5 font-medium text-gray-900 ">Visa ending in 7658</p>
                                    <p class="font-normal text-gray-500 ">Expiry 10/2024</p>
                                </div>
                                @else
                                No Payment Method added.
                                @endif
                            </div>
                        </dd>
                    </dl>
                </div>
            </div>
            <button type="button" @click="editPersonalInformation = !editPersonalInformation"
                class="inline-flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-0 sm:w-auto">
                <svg class="-ms-0.5 me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z">
                    </path>
                </svg>
                Edit your data
            </button>
        </div>
        <div class="rounded-lg border border-gray-200 bg-gray-50 p-4   md:p-8">
            <h3 class="mb-4 text-xl font-semibold text-gray-900 ">Latest orders</h3>
            <div class="flex flex-wrap items-center gap-y-4 border-b border-gray-200 pb-4 md:pb-5">
                <dl class="w-1/2 sm:w-48">
                    <dt class="text-base font-medium text-gray-500 ">Order ID:</dt>
                    <dd class="mt-1.5 text-base font-semibold text-gray-900 ">
                        <a href="#" class="hover:underline">#FWB12546798</a>
                    </dd>
                </dl>

                <dl class="w-1/2 sm:w-1/4 md:flex-1 lg:w-auto">
                    <dt class="text-base font-medium text-gray-500 ">Date:</dt>
                    <dd class="mt-1.5 text-base font-semibold text-gray-900 ">11.12.2023</dd>
                </dl>

                <dl class="w-1/2 sm:w-1/5 md:flex-1 lg:w-auto">
                    <dt class="text-base font-medium text-gray-500 ">Price:</dt>
                    <dd class="mt-1.5 text-base font-semibold text-gray-900 ">$499</dd>
                </dl>

                <dl class="w-1/2 sm:w-1/4 sm:flex-1 lg:w-auto">
                    <dt class="text-base font-medium text-gray-500 ">Status:</dt>
                    <dd
                        class="me-2 mt-1.5 inline-flex shrink-0 items-center rounded bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800 ">
                        <svg class="me-1 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z">
                            </path>
                        </svg>
                        In transit
                    </dd>
                </dl>

                <div class="w-full sm:flex sm:w-32 sm:items-center sm:justify-end sm:gap-4">
                    <button id="actionsMenuDropdownModal10" data-dropdown-toggle="dropdownOrderModal10" type="button"
                        class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100     md:w-auto">
                        Actions
                        <svg class="-me-0.5 ms-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="dropdownOrderModal10"
                        class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow "
                        data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                        <ul class="p-2 text-left text-sm font-medium text-gray-500 "
                            aria-labelledby="actionsMenuDropdown10">
                            <li>
                                <a href="#"
                                    class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900  ">
                                    <svg class="me-1.5 h-4 w-4 text-gray-400 group-hover:text-gray-900  "
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M17.651 7.65a7.131 7.131 0 0 0-12.68 3.15M18.001 4v4h-4m-7.652 8.35a7.13 7.13 0 0 0 12.68-3.15M6 20v-4h4">
                                        </path>
                                    </svg>
                                    <span>Order again</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900  ">
                                    <svg class="me-1.5 h-4 w-4 text-gray-400 group-hover:text-gray-900  "
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"></path>
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                    </svg>
                                    Order details
                                </a>
                            </li>
                            <li>
                                <a href="#" data-modal-target="deleteOrderModal" data-modal-toggle="deleteOrderModal"
                                    class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-red-600 hover:bg-gray-100 ">
                                    <svg class="me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z">
                                        </path>
                                    </svg>
                                    Cancel order
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap items-center gap-y-4 border-b border-gray-200 py-4 pb-4  md:py-5">
                <dl class="w-1/2 sm:w-48">
                    <dt class="text-base font-medium text-gray-500 ">Order ID:</dt>
                    <dd class="mt-1.5 text-base font-semibold text-gray-900 ">
                        <a href="#" class="hover:underline">#FWB12546777</a>
                    </dd>
                </dl>

                <dl class="w-1/2 sm:w-1/4 md:flex-1 lg:w-auto">
                    <dt class="text-base font-medium text-gray-500 ">Date:</dt>
                    <dd class="mt-1.5 text-base font-semibold text-gray-900 ">10.11.2024</dd>
                </dl>

                <dl class="w-1/2 sm:w-1/5 md:flex-1 lg:w-auto">
                    <dt class="text-base font-medium text-gray-500 ">Price:</dt>
                    <dd class="mt-1.5 text-base font-semibold text-gray-900 ">$3,287</dd>
                </dl>

                <dl class="w-1/2 sm:w-1/4 sm:flex-1 lg:w-auto">
                    <dt class="text-base font-medium text-gray-500 ">Status:</dt>
                    <dd
                        class="mt-1.5 inline-flex items-center rounded bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800 ">
                        <svg class="me-1 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18 17.94 6M18 18 6.06 6"></path>
                        </svg>
                        Cancelled
                    </dd>
                </dl>

                <div class="w-full sm:flex sm:w-32 sm:items-center sm:justify-end sm:gap-4">
                    <button id="actionsMenuDropdownModal11" data-dropdown-toggle="dropdownOrderModal11" type="button"
                        class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100     md:w-auto">
                        Actions
                        <svg class="-me-0.5 ms-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="dropdownOrderModal11"
                        class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow "
                        data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                        <ul class="p-2 text-left text-sm font-medium text-gray-500 "
                            aria-labelledby="actionsMenuDropdown11">
                            <li>
                                <a href="#"
                                    class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900  ">
                                    <svg class="me-1.5 h-4 w-4 text-gray-400 group-hover:text-gray-900  "
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M17.651 7.65a7.131 7.131 0 0 0-12.68 3.15M18.001 4v4h-4m-7.652 8.35a7.13 7.13 0 0 0 12.68-3.15M6 20v-4h4">
                                        </path>
                                    </svg>
                                    <span>Order again</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900  ">
                                    <svg class="me-1.5 h-4 w-4 text-gray-400 group-hover:text-gray-900  "
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"></path>
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                    </svg>
                                    Order details
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap items-center gap-y-4 border-b border-gray-200 py-4 pb-4  md:py-5">
                <dl class="w-1/2 sm:w-48">
                    <dt class="text-base font-medium text-gray-500 ">Order ID:</dt>
                    <dd class="mt-1.5 text-base font-semibold text-gray-900 ">
                        <a href="#" class="hover:underline">#FWB12546846</a>
                    </dd>
                </dl>

                <dl class="w-1/2 sm:w-1/4 md:flex-1 lg:w-auto">
                    <dt class="text-base font-medium text-gray-500 ">Date:</dt>
                    <dd class="mt-1.5 text-base font-semibold text-gray-900 ">07.11.2024</dd>
                </dl>

                <dl class="w-1/2 sm:w-1/5 md:flex-1 lg:w-auto">
                    <dt class="text-base font-medium text-gray-500 ">Price:</dt>
                    <dd class="mt-1.5 text-base font-semibold text-gray-900 ">$111</dd>
                </dl>

                <dl class="w-1/2 sm:w-1/4 sm:flex-1 lg:w-auto">
                    <dt class="text-base font-medium text-gray-500 ">Status:</dt>
                    <dd
                        class="mt-1.5 inline-flex items-center rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 ">
                        <svg class="me-1 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 11.917 9.724 16.5 19 7.5"></path>
                        </svg>
                        Completed
                    </dd>
                </dl>

                <div class="w-full sm:flex sm:w-32 sm:items-center sm:justify-end sm:gap-4">
                    <button id="actionsMenuDropdownModal12" data-dropdown-toggle="dropdownOrderModal12" type="button"
                        class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100     md:w-auto">
                        Actions
                        <svg class="-me-0.5 ms-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="dropdownOrderModal12"
                        class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow "
                        data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                        <ul class="p-2 text-left text-sm font-medium text-gray-500 "
                            aria-labelledby="actionsMenuDropdown12">
                            <li>
                                <a href="#"
                                    class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900  ">
                                    <svg class="me-1.5 h-4 w-4 text-gray-400 group-hover:text-gray-900  "
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M17.651 7.65a7.131 7.131 0 0 0-12.68 3.15M18.001 4v4h-4m-7.652 8.35a7.13 7.13 0 0 0 12.68-3.15M6 20v-4h4">
                                        </path>
                                    </svg>
                                    <span>Order again</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900  ">
                                    <svg class="me-1.5 h-4 w-4 text-gray-400 group-hover:text-gray-900  "
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"></path>
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                    </svg>
                                    Order details
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap items-center gap-y-4 pt-4 md:pt-5">
                <dl class="w-1/2 sm:w-48">
                    <dt class="text-base font-medium text-gray-500 ">Order ID:</dt>
                    <dd class="mt-1.5 text-base font-semibold text-gray-900 ">
                        <a href="#" class="hover:underline">#FWB12546212</a>
                    </dd>
                </dl>

                <dl class="w-1/2 sm:w-1/4 md:flex-1 lg:w-auto">
                    <dt class="text-base font-medium text-gray-500 ">Date:</dt>
                    <dd class="mt-1.5 text-base font-semibold text-gray-900 ">18.10.2024</dd>
                </dl>

                <dl class="w-1/2 sm:w-1/5 md:flex-1 lg:w-auto">
                    <dt class="text-base font-medium text-gray-500 ">Price:</dt>
                    <dd class="mt-1.5 text-base font-semibold text-gray-900 ">$756</dd>
                </dl>

                <dl class="w-1/2 sm:w-1/4 sm:flex-1 lg:w-auto">
                    <dt class="text-base font-medium text-gray-500 ">Status:</dt>
                    <dd
                        class="mt-1.5 inline-flex items-center rounded bg-green-100 px-2.5 py-0.5 text-xs font-medium text-green-800 ">
                        <svg class="me-1 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 11.917 9.724 16.5 19 7.5"></path>
                        </svg>
                        Completed
                    </dd>
                </dl>

                <div class="w-full sm:flex sm:w-32 sm:items-center sm:justify-end sm:gap-4">
                    <button id="actionsMenuDropdownModal13" data-dropdown-toggle="dropdownOrderModal13" type="button"
                        class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100     md:w-auto">
                        Actions
                        <svg class="-me-0.5 ms-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 9-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="dropdownOrderModal13"
                        class="z-10 hidden w-40 divide-y divide-gray-100 rounded-lg bg-white shadow "
                        data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                        <ul class="p-2 text-left text-sm font-medium text-gray-500 "
                            aria-labelledby="actionsMenuDropdown13">
                            <li>
                                <a href="#"
                                    class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900  ">
                                    <svg class="me-1.5 h-4 w-4 text-gray-400 group-hover:text-gray-900  "
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M17.651 7.65a7.131 7.131 0 0 0-12.68 3.15M18.001 4v4h-4m-7.652 8.35a7.13 7.13 0 0 0 12.68-3.15M6 20v-4h4">
                                        </path>
                                    </svg>
                                    <span>Order again</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="group inline-flex w-full items-center rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900  ">
                                    <svg class="me-1.5 h-4 w-4 text-gray-400 group-hover:text-gray-900  "
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"></path>
                                        <path stroke="currentColor" stroke-width="2"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"></path>
                                    </svg>
                                    Order details
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section x-show="editPersonalInformation"
        class="mx-auto w-full max-w-full fixed inset-0 flex items-center justify-center bg-black bg-opacity-50"
        style="display: none">
        <div class="max-w-4xl w-full px-8 py-4 h-full mx-auto transform transition-all duration-300 bg-gray-800">
            <!-- Modal header -->
            <div
                class="flex items-center justify-between rounded-t border-b border-gray-200 p-4 dark:border-gray-700 md:p-5">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Account Information</h3>
                <button type="button" @click="editPersonalInformation = false"
                    class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="accountInformationModal2">
                    <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <form method="" action="" class="mt-6 flex flex-col">
                @csrf
                <!-- First Name -->
                <label class="text-white" for="first_name">First Name</label>
                <input id="first_name" class="mb-3 mt-3 border px-4 py-2" type="text" name="first_name"
                    value="{{ $user->first_name }}" required autofocus autocomplete="given-name" />
                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />

                <!-- Last Name -->
                <label class="text-white" for="last_name">Last Name</label>
                <input id="last_name" class="mb-3 mt-3 border px-4 py-2" type="text" name="last_name"
                    value="{{ $user->last_name }}" required autocomplete="family-name" />
                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />

                <!-- Phone Number -->
                <label class="text-white" for="phone">Phone Number</label>
                <input id="phone" class="mb-3 mt-3 border px-4 py-2" type="tel" name="phone" value="{{ $user->phone }}"
                    required autocomplete="tel" />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />

                <!-- Date of Birth and Gender (Horizontal on Large Screens) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Date of Birth -->
                    <div>
                        <label class="text-white" for="dob">Date of Birth</label>
                        <input id="dob" class="w-full mb-3 mt-3 border px-4 py-2" type="date" name="dob"
                            value="{{ old('dob', optional($user->dob)->format('Y-m-d')) }}" required
                            autocomplete="bday" />
                        <x-input-error :messages="$errors->get('dob')" class="mt-2" />
                    </div>
                    <!-- Gender -->
                    <div>
                        <label class="text-white" for="gender">Gender</label>
                        <select id="gender" class="w-full mb-3 mt-3 border px-4 py-2" name="gender" required>
                            <option value="" disabled {{ucfirst($user->gender) ? '' : 'selected'}}>Not Selected</option>
                            <option value="male" {{ucfirst(ucfirst($user->gender)) === 'male' ? 'selected' : ''}}>Male
                            </option>
                            <option value="female" {{ucfirst($user->gender) === 'female' ? 'selected' : ''}}>Female
                            </option>
                            <option value="other" {{ucfirst($user->gender) === 'other' ? 'selected' : ''}}>Others
                            </option>
                        </select>
                        <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                    </div>
                </div>

                <!-- Country, State, and Postcode (Horizontal on Large Screens) -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Country -->
                    <div>
                        <label class="text-white" for="country">Country</label>
                        <input id="country" class="w-full mb-3 mt-3 border px-4 py-2" type="text" name="country"
                            value="{{ $user->country }}" required autocomplete="country" />
                        <x-input-error :messages="$errors->get('country')" class="mt-2" />
                    </div>

                    <!-- State -->
                    <div>
                        <label class="text-white" for="state">State</label>
                        <input id="state" class="w-full mb-3 mt-3 border px-4 py-2" type="text" name="state"
                            value="{{ $user->state }}" required autocomplete="address-level1" />
                        <x-input-error :messages="$errors->get('state')" class="mt-2" />
                    </div>

                    <!-- Postcode -->
                    <div>
                        <label class="text-white" for="postcode">Postcode</label>
                        <input id="postcode" class="w-full mb-3 mt-3 border px-4 py-2" type="text" name="postcode"
                            value="{{ $user->postcode }}" required autocomplete="postal-code" />
                        <x-input-error :messages="$errors->get('postcode')" class="mt-2" />
                    </div>
                </div>

                <!-- Email and Confirm Email (Horizontal on Large Screens) -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Email -->
                    <div>
                        <label class="text-white" for="email">Email</label>
                        <input id="email" class="w-full mb-3 mt-3 border px-4 py-2 text-gray-500" type="email"
                            name="email" value="{{ $user->email }}" required autocomplete="email" disabled />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>

                <!-- Register Button -->
                <div class="flex justify-center items-center gap-5"><button type="submit"
                        class="my-5 w-full bg-violet-900 py-2 text-white">
                        Save
                    </button>
                    <button type="button" @click="editPersonalInformation = false"
                        class="my-5 w-full bg-violet-900 py-2 text-white">
                        Cancle
                    </button>
                </div>

            </form>
        </div>
    </section>
</section>



<!-- Success Pop-up -->
<div id="success-popup" class="fixed inset-0 items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg transform transition-all duration-300 scale-95 opacity-0">
        <p class="text-green-600 font-semibold">{{ session('success') }}</p>
    </div>
</div>
<!-- Add CSS for Animation -->
<style>
    @keyframes popup {
        0% {
            transform: scale(0.95);
            opacity: 0;
        }

        50% {
            transform: scale(1.05);
            opacity: 1;
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    .popup-animation {
        animation: popup 0.5s ease-out forwards;
    }
</style>
<!-- Add JavaScript to Handle the Pop-up -->
<script>
    function showSuccessPopup() {
        const popup = document.getElementById('success-popup');
        const popupContent = popup.querySelector('div');

        popup.classList.remove('hidden');
        popup.classList.add('flex');
        setTimeout(() => {
            popupContent.classList.add('popup-animation');
        }, 10);

        setTimeout(() => {
            popupContent.classList.remove('popup-animation');
            popup.classList.add('hidden');
            popup.classList.remove('flex');

        }, 2000);
    }

    @if(session('success'))
        document.addEventListener('DOMContentLoaded', function() {
            showSuccessPopup();
        });
    @endif
</script>
@endsection