@extends('layouts.masterlayout')

@section('content')
<!-- Login card  -->
<section class="mx-auto flex-grow w-full mt-10 mb-10 max-w-[1200px] px-5">
    <div class="container mx-auto border px-5 py-5 shadow-sm md:w-1/2">
        <div class="">
            <p class="text-4xl font-bold">LOGIN</p>
            <p>Welcome back, customer!</p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="mt-6 flex flex-col">
            @csrf

            <!-- Email -->
            <div>
                <label for="email">Email</label>
                <input id="email" class="w-full mb-3 mt-3 border px-4 py-2" type="email" name="email"
                    placeholder="youremail@domain.com" :value="old('email')" required autofocus autocomplete="email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div>
                <label for="password">Password</label>
                <div class="relative">
                    <input id="password" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;"
                        class="w-full mt-3 border px-4 py-2" type="password" name="password" required
                        autocomplete="current-password" />
                    <span class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer"
                        onclick="togglePasswordVisibility('password', this)">
                        <i class="fas fa-eye" id="eye-icon-password"></i>
                    </span>
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="mt-4 flex justify-between">
                <div class="flex gap-2">
                    <input id="remember_me" type="checkbox" name="remember"
                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-0 focus:ring-offset-0" />
                    <label for="remember_me">Remember me</label>
                </div>
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="text-violet-900">Forgot password</a>
                @endif
            </div>

            <!-- Login Button -->
            <button type="submit" class="my-5 w-full bg-violet-900 py-2 text-white">
                LOGIN
            </button>
        </form>

        <p class="text-center text-gray-500">OR LOGIN WITH</p>

        <!-- Social Login Buttons -->
        <div class="my-5 flex gap-2">
            <button class="w-1/2 bg-blue-800 py-2 text-white">FACEBOOK</button>
            <button class="w-1/2 bg-orange-500 py-2 text-white">GOOGLE</button>
        </div>

        <!-- Register Link -->
        <p class="text-center">
            Don`t have an account?
            <a href="{{ route('register') }}" class="text-violet-900">Register now</a>
        </p>
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