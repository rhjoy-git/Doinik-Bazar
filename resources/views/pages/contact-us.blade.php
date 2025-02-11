@extends('layouts.masterlayout')

@section('content')
<div class="container w-full max-w-[1200px] mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-8">Contact Us</h1>

    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <!-- Contact Information -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Our Information</h2>
            <p class="text-gray-700"><strong>Address:</strong> 123 Main Street, City, Country</p>
            <p class="text-gray-700"><strong>Phone:</strong> +1 (123) 456-7890</p>
            <p class="text-gray-700"><strong>Email:</strong> info@example.com</p>
        </div>

        <!-- Contact Form -->
        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                <input type="text" name="name" id="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-violet-500" placeholder="Your Name" required>
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-violet-500" placeholder="Your Email" required>
            </div>

            <div class="mb-4">
                <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                <textarea name="message" id="message" rows="5" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-violet-500" placeholder="Your Message" required></textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="bg-violet-900 text-white px-6 py-2 rounded-lg hover:bg-violet-700 transition duration-300">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Success Pop-up -->
<div id="success-popup" class="fixed inset-0 items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg transform transition-all duration-300 scale-95 opacity-0">
        <p class="text-green-600 font-semibold">Message Sent Successfully!</p>
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

        }, 3000);
    }

    @if(session('success'))
        document.addEventListener('DOMContentLoaded', function() {
            showSuccessPopup();
        });
    @endif
</script>
@endsection