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

            <!-- Email Address -->
            <label for="email">Email Address</label>
            <input id="email" class="mb-3 mt-3 border px-4 py-2" type="email" name="email" placeholder="youremail@domain.com" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <!-- Password -->
            <label for="password">Password</label>
            <input id="password" class="mt-3 border px-4 py-2" type="password" name="password" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <!-- Remember Me -->
            <div class="mt-4 flex justify-between">
                <div class="flex gap-2">
                    <input id="remember_me" type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" />
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
@endsection