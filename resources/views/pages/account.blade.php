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
<section class="mx-auto flex-grow w-full mt-10 mb-10 max-w-screen-xl px-5">
    <div class="container mx-auto border px-5 py-5 shadow-sm md:w-1/2">
        <div class="">
            <p class="text-4xl font-bold">Account Information</p>
        </div>

        <div class="mt-6">
            <p><strong>First Name:</strong> {{ $user->first_name }}</p>
            <p><strong>Last Name:</strong> {{ $user->last_name }}</p>
            <p><strong>Phone:</strong> {{ $user->phone }}</p>
            <p><strong>Date of Birth:</strong> {{ $user->dob }}</p>
            <p><strong>Gender:</strong> {{ ucfirst($user->gender) }}</p>
            <p><strong>Country:</strong> {{ $user->country }}</p>
            <p><strong>State:</strong> {{ $user->state }}</p>
            <p><strong>Postcode:</strong> {{ $user->postcode }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
        </div>
    </div>
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