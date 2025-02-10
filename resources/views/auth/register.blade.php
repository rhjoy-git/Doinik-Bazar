@extends('layouts.masterlayout')

@section('content')
<!-- Registration Card -->
<section class="mx-auto flex-grow w-full mt-10 mb-10 max-w-[1200px] px-5">
    <div class="container mx-auto border px-5 py-5 shadow-sm md:w-1/2">
        <div class="">
            <p class="text-4xl font-bold">REGISTER</p>
            <p>Create a new account to get started.</p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('register') }}" class="mt-6 flex flex-col">
            @csrf

            <!-- First Name -->
            <label for="first_name">First Name</label>
            <input id="first_name" class="mb-3 mt-3 border px-4 py-2" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="given-name" />
            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />

            <!-- Last Name -->
            <label for="last_name">Last Name</label>
            <input id="last_name" class="mb-3 mt-3 border px-4 py-2" type="text" name="last_name" :value="old('last_name')" required autocomplete="family-name" />
            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />

            <!-- Phone Number -->
            <label for="phone">Phone Number</label>
            <input id="phone" class="mb-3 mt-3 border px-4 py-2" type="tel" name="phone" :value="old('phone')" required autocomplete="tel" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />

            <!-- Date of Birth and Gender (Horizontal on Large Screens) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Date of Birth -->
                <div>
                    <label for="dob">Date of Birth</label>
                    <input id="dob" class="w-full mb-3 mt-3 border px-4 py-2" type="date" name="dob" :value="old('dob')" required autocomplete="bday" />
                    <x-input-error :messages="$errors->get('dob')" class="mt-2" />
                </div>

                <!-- Gender -->
                <div>
                    <label for="gender">Gender</label>
                    <select id="gender" class="w-full mb-3 mt-3 border px-4 py-2" name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                        <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                    <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                </div>
            </div>

            <!-- Country, State, and Postcode (Horizontal on Large Screens) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Country -->
                <div>
                    <label for="country">Country</label>
                    <input id="country" class="w-full mb-3 mt-3 border px-4 py-2" type="text" name="country" :value="old('country')" required autocomplete="country" />
                    <x-input-error :messages="$errors->get('country')" class="mt-2" />
                </div>

                <!-- State -->
                <div>
                    <label for="state">State</label>
                    <input id="state" class="w-full mb-3 mt-3 border px-4 py-2" type="text" name="state" :value="old('state')" required autocomplete="address-level1" />
                    <x-input-error :messages="$errors->get('state')" class="mt-2" />
                </div>

                <!-- Postcode -->
                <div>
                    <label for="postcode">Postcode</label>
                    <input id="postcode" class="w-full mb-3 mt-3 border px-4 py-2" type="text" name="postcode" :value="old('postcode')" required autocomplete="postal-code" />
                    <x-input-error :messages="$errors->get('postcode')" class="mt-2" />
                </div>
            </div>

            <!-- Email and Confirm Email (Horizontal on Large Screens) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Email -->
                <div>
                    <label for="email">Email</label>
                    <input id="email" class="w-full mb-3 mt-3 border px-4 py-2" type="email" name="email" :value="old('email')" required autocomplete="email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Confirm Email -->
                <div>
                    <label for="email_confirmation">Confirm Email</label>
                    <input id="email_confirmation" class="w-full mb-3 mt-3 border px-4 py-2" type="email" name="email_confirmation" required autocomplete="email" />
                    <x-input-error :messages="$errors->get('email_confirmation')" class="mt-2" />
                </div>
            </div>

            <!-- Password and Confirm Password (Horizontal on Large Screens) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Password -->
                <div>
                    <label for="password">Password</label>
                    <div class="relative">
                        <input id="password" class="w-full mt-3 border px-4 py-2" type="password" name="password" required autocomplete="new-password" />
                        <span class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer" onclick="togglePasswordVisibility('password', this)">
                            <i class="fas fa-eye" id="eye-icon-password"></i>
                        </span>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation">Confirm Password</label>
                    <div class="relative">
                        <input id="password_confirmation" class="w-full mt-3 border px-4 py-2" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <span class="absolute inset-y-0 right-0 flex items-center pr-3 cursor-pointer" onclick="togglePasswordVisibility('password_confirmation', this)">
                            <i class="fas fa-eye" id="eye-icon-confirmation"></i>
                        </span>
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
            </div>

            <!-- Register Button -->
            <button type="submit" class="my-5 w-full bg-violet-900 py-2 text-white">
                REGISTER
            </button>
        </form>

        <!-- Login Link -->
        <p class="text-center">
            Already have an account?
            <a href="{{ route('login') }}" class="text-violet-900">Login now</a>
        </p>
    </div>
</section>
<!-- /Registration Card -->

<!-- Toggle Password Visibility Script -->
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