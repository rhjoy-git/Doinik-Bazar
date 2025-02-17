@extends('layouts.infolayout')
@section('title')
- Personal Information
@endsection

{{-- Breadcrumbs --}}
@section('breadcrumbs')
<x-breadcrumbs message="Personal Information" />
@endsection

{{-- Info Content --}}
@section('info-content')
<div class="container mx-12 p-4 py-2 ms-10">
    <div class="max-w-screen-xl w-fit h-auto  bg-white rounded-lg p-4">
        <h2 class="text-2xl font-semibold mb-6">Personal Information</h2>
        <div class="mx-auto">
            {{-- Profile Photo Upload Section --}}
            <div class="col-span-full mb-8">
                <label for="profile-photo" class="block text-sm/6 font-medium text-gray-900">Profile photo</label>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                    <div class="text-center">
                        <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd"
                                d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                                clip-rule="evenodd" />
                        </svg>
                        <div class="mt-4 flex text-sm/6 text-gray-600">
                            <label for="file-upload"
                                class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                <span>Upload a file</span>
                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                            </label>
                            <p class="pl-1">or drag and drop</p>
                        </div>
                        <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                    </div>
                </div>
            </div>

            {{-- Personal Information Section --}}
            <div class="py-4 md:py-8">
                <div class="mb-4 grid gap-4 sm:grid-cols-2 sm:gap-8 lg:gap-16">
                    {{-- First Part: Full Row and One Column --}}
                    <div class="space-y-4 col-span-full">
                        <div class="flex space-x-4">
                            <img class="h-16 w-16 rounded-lg" src="{{ asset('resources/images/user.png') }}"
                                alt="{{ $user->first_name }} {{ $user->last_name }}" />
                            <div>
                                <span
                                    class="mb-2 inline-block rounded bg-blue-100 px-2.5 py-0.5 text-xs font-medium text-blue-800">
                                    PRO Account
                                </span>
                                <h2 class="flex items-center text-xl font-bold leading-none text-gray-900 sm:text-2xl">
                                    {{ $user->first_name }} {{ $user->last_name }}
                                </h2>
                            </div>
                        </div>
                    </div>

                    {{-- Second Part: One Row, Two Columns --}}
                    <div class="space-y-4">
                        <dl>
                            <dt class="font-semibold text-gray-900">Email Address</dt>
                            <dd class="text-gray-500">{{ $user->email }}</dd>
                        </dl>
                        <dl>
                            <dt class="font-semibold text-gray-900">Phone Number</dt>
                            <dd class="text-gray-500">+88{{ $user->phone }}</dd>
                        </dl>
                        <dl>
                            <dt class="font-semibold text-gray-900">Date of Birth</dt>
                            <dd class="text-gray-500">
                                {{ $user->dob ? $user->dob->format('Y-m-d') : 'Not provided' }}
                            </dd>
                        </dl>
                        <dl>
                            <dt class="font-semibold text-gray-900">Gender</dt>
                            <dd class="text-gray-500">{{ $user->gender ?? 'Not provided' }}</dd>
                        </dl>
                    </div>

                    {{-- Third Part: One Row, Two Columns --}}
                    <div class="space-y-4">
                        <dl>
                            <dt class="font-semibold text-gray-900">Favorite Pick-up Point</dt>
                            <dd class="flex items-center gap-1 text-gray-500">
                                <svg class="hidden h-5 w-5 shrink-0 text-gray-400 lg:inline" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 12c.263 0 .524-.06.767-.175a2 2 0 0 0 .65-.491c.186-.21.333-.46.433-.734.1-.274.15-.568.15-.864a2.4 2.4 0 0 0 .586 1.591c.375.422.884.659 1.414.659.53 0 1.04-.237 1.414-.659A2.4 2.4 0 0 0 12 9.736a2.4 2.4 0 0 0 .586 1.591c.375.422.884.659 1.414.659.53 0 1.04-.237 1.414-.659A2.4 2.4 0 0 0 16 9.736c0 .295.052.588.152.861s.248.521.434.73a2 2 0 0 0 .649.488 1.809 1.809 0 0 0 1.53 0 2.03 2.03 0 0 0 .65-.488c.185-.209.332-.457.433-.73.1-.273.152-.566.152-.861 0-.974-1.108-3.85-1.618-5.121A.983.983 0 0 0 17.466 4H6.456a.986.986 0 0 0-.93.645C5.045 5.962 4 8.905 4 9.736c.023.59.241 1.148.611 1.567.37.418.865.667 1.389.697Zm0 0c.328 0 .651-.091.94-.266A2.1 2.1 0 0 0 7.66 11h.681a2.1 2.1 0 0 0 .718.734c.29.175.613.266.942.266.328 0 .651-.091.94-.266.29-.174.537-.427.719-.734h.681a2.1 2.1 0 0 0 .719.734c.289.175.612.266.94.266.329 0 .652-.091.942-.266.29-.174.536-.427.718-.734h.681c.183.307.43.56.719.734.29.174.613.266.941.266a1.819 1.819 0 0 0 1.06-.351M6 12a1.766 1.766 0 0 1-1.163-.476M5 12v7a1 1 0 0 0 1 1h2v-5h3v5h7a1 1 0 0 0 1-1v-7m-5 3v2h2v-2h-2Z" />
                                </svg>
                                @if ($user->pickuppoint)
                                {{ $user->pickuppoint }}
                                @else
                                Mirpur 10, Dhaka, Bangladesh - 1213
                                @endif
                            </dd>
                        </dl>
                        <dl>
                            <dt class="font-semibold text-gray-900">Home Address</dt>
                            <dd class="flex items-center gap-1 text-gray-500">
                                <svg class="hidden h-5 w-5 shrink-0 text-gray-400 lg:inline" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
                                </svg>
                                {{ $user->state }}, {{ $user->country }} - {{ $user->postcode }}
                            </dd>
                        </dl>
                        <dl>
                            <dt class="font-semibold text-gray-900">Delivery Address</dt>
                            <dd class="flex items-center gap-1 text-gray-500">
                                <svg class="hidden h-5 w-5 shrink-0 text-gray-400 lg:inline" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 7h6l2 4m-8-4v8m0-8V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v9h2m8 0H9m4 0h2m4 0h2v-4m0 0h-5m3.5 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm-10 0a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z" />
                                </svg>
                                @if ($user->delivery_address)
                                {{ $user->delivery_address }}
                                @else
                                Null
                                @endif
                            </dd>
                        </dl>
                        <dl>
                            <dt class="mb-1 font-semibold text-gray-900">Payment Methods</dt>
                            <dd class="flex items-center space-x-4 text-gray-500">
                                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-gray-100">
                                    <img class="h-auto w-auto"
                                        src="{{ asset('resources/images/payment-method-visa.svg') }}" alt="" />
                                </div>
                                <div>
                                    @if ($user->address)
                                    <div class="text-sm">
                                        <p class="mb-0.5 font-medium text-gray-900">Visa ending in 7658</p>
                                        <p class="font-normal text-gray-500">Expiry 10/2024</p>
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
        </div>
    </div>
</div>
@endsection