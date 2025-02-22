@extends('layouts.masterlayout')

@section('content')
@if(session('info'))
<div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 relative mb-4" role="alert">
    <span class="block sm:inline">{{ session('info') }}</span>
</div>
@endif

<!-- Login card  -->
<section class="mx-auto flex-grow w-full mt-10 mb-10 max-w-screen-xl px-5">
    <div class="container mx-auto border px-7 py-7 md:w-1/2 rounded-2xl shadow">
        <div class="">
            <p class="font-inter text-2xl font-semibold">Welcome back</p>
        </div>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="flex flex-col items-center space-y-4 mt-6">
            <div class="flex space-x-4">
                <!-- Google Login Button -->
                <a href="#"
                    class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-lg shadow-sm hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"
                        alt="Google logo" class="h-5 w-5 mr-2" />
                    <span>Log in with Google</span>
                </a>

                <!-- Apple Login Button -->
                <a href="#"
                    class="flex items-center justify-center px-4 py-2 border border-gray-300 rounded-lg shadow-sm hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple logo"
                        class="h-5 w-5 mr-2" />
                    <span>Log in with Apple</span>
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
            <div class="w-full bg-white md:mt-0 sm:max-w-md xl:p-0 ">
                <div class="md:px-6 md:pb-6 md:pt-2 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-xl ">
                        Sign in to your account
                    </h1>
                    <form method="POST" action="{{ route('login.submit') }}" class="space-y-4 md:space-y-6" action="#">
                        @csrf
                        <div>
                            <!-- Email Field -->
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your
                                Email</label>
                            <input id="email" placeholder="Enter your email" type="email" name="email" required
                                autocomplete="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 ">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div>
                            <!-- Password Field -->
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                            <div class="relative">
                                <input id="password" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;"
                                    type="password" name="password" required autocomplete="current-password"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 ">
                                <span class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer"
                                    onclick="togglePasswordVisibility('password', this)">
                                    <i class="fas fa-eye" id="eye-icon-password"></i>
                                </span>
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300  focus:ring-0 focus:ring-offset-0">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500 ">Remember me</label>
                                </div>
                            </div>
                            <a href="#"
                                class="text-sm font-medium text-blue-600 hover:underline ">Forgot
                                password?</a>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign
                            in</button>
                        <p class="text-sm font-light text-gray-500">
                            Don’t have an account yet? <a href="#"
                                class="font-medium text-blue-600 hover:underline ">Sign up</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Login Card  -->
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