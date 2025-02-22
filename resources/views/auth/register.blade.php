@extends('layouts.masterlayout')

@section('content')
<!-- Registration card  -->
<section class="mx-auto flex-grow w-full mt-10 mb-10 max-w-screen-xl px-5">
    <div class="container mx-auto border px-7 py-7 md:w-1/2 rounded-2xl shadow">
        <div class="">
            <p class="font-inter text-2xl font-semibold">Create an account</p>
        </div>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="flex flex-col items-center space-y-4 mt-6">
            <div class="flex space-x-4">
                <!-- Google Login Button -->
                <a href="#"
                    class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-lg shadow-sm hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    <img src="{{ asset('resources/images/google.svg') }}" alt="Google G Logo" class="h-5 w-5 mr-2" />
                    <span>Sign up with Google</span>
                </a>

                <!-- Apple Login Button -->
                <a href="#"
                    class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-lg shadow-sm hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    <img src="{{ asset('resources/images/apple.svg') }}" alt="Apple logo"
                        class="h-5 w-5 mr-2" />
                    <span>Sign up with Apple</span>
                </a>
            </div>

            <!-- Or Separator -->
            <div class="flex items-center">
                <span class="text-gray-500 text-sm">----------</span> <!-- Text before "or" -->
                <hr class="flex-grow border-gray-300 mx-2" />
                <span class="text-gray-500 text-lg">or</span>
                <hr class="flex-grow border-gray-300 mx-2" />
                <span class="text-gray-500 text-sm">----------</span> <!-- Text after "or" -->
            </div>
        </div>
        <div class="font-inter flex flex-col items-center justify-center mx-auto lg:py-0">
            <div class="w-full bg-white  md:mt-0 sm:max-w-lg xl:p-0  -gray-700">
                <div class="md:px-2 md:pb-6 md:pt-2 space-y-4 md:space-y-6 sm:p-8 w-full">
                    <form method="POST" action="{{ route('register.submit') }}" class="space-y-4 md:space-y-6">
                        @csrf
                        <div class="flex space-x-4 mt-2">
                            <div class="flex-1">
                                <label for="first_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">First
                                    Name</label>
                                <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}"
                                    required autofocus autocomplete="given-name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5  -gray-600"
                                    placeholder="Rakibul Hasan" required>
                                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                            </div>

                            <div class="flex-1">
                                <label for="last_name"
                                    class="block mb-2 text-sm font-medium text-gray-900 ">Last
                                    Name</label>
                                <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}"
                                    required autocomplete="family-name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5  -gray-600"
                                    placeholder="Joy" required>
                                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your
                                email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" required
                                autocomplete="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5  -gray-600"
                                placeholder="name@company.com" required>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                            <div class="relative">
                                <input id="password" type="password" name="password" required
                                    autocomplete="new-password" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5  -gray-600"
                                    required>
                                <span class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer"
                                    onclick="togglePasswordVisibility('password', this)">
                                    <i class="fas fa-eye" id="eye-icon-password"></i>
                                </span>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div>
                            <label for="confirm-password"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Confirm
                                password</label>
                            <div class="relative">
                                <input id="password_confirmation" type="password" name="password_confirmation" required
                                    autocomplete="new-password" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5  -gray-600"
                                    required>
                                <span class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer"
                                    onclick="togglePasswordVisibility('password', this)">
                                    <i class="fas fa-eye" id="eye-icon-password"></i>
                                </span>
                            </div>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" aria-describedby="terms" type="checkbox"
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300  -gray-600 focus:ring-0 focus:ring-offset-0"
                                     required>
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms"
                                    class="font-light text-gray-500  focus:ring-0 focus:ring-offset-0">I
                                    accept the <a class="font-medium text-blue-600 hover:underline "
                                        href="#">Terms and Conditions</a></label>
                            </div>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Create
                            an account</button>
                        <p class="text-sm font-light text-gray-500 ">
                            Already have an account? <a href="{{ route('login') }}"
                                class="font-medium text-blue-600 hover:underline ">Login
                                here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Registration Card  -->
<script>
    function togglePasswordVisibility(inputId, iconElement) {
        const passwordInput = document.getElementById(inputId);
        const icon = iconElement.querySelector('i');

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = "password";
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    }
</script>
@endsection