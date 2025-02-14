@extends('layouts.masterlayout')
@section('content')
{{-- breadcrumbs --}}
<x-breadcrumbs message="About Us" />

<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-8">About Us</h1>

    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <!-- About Us Content -->
        <div class="space-y-6">
            <!-- Mission Section -->
            <div>
                <h2 class="text-2xl font-semibold mb-4">Our Mission</h2>
                <p class="text-gray-700 leading-relaxed"> 
                    At <a href="https://www.endbrackets.com" target="_blank">End Brackets</a>, our mission is to provide high-quality products and services that enhance the
                    lives of our customers. We are committed to innovation, sustainability, and exceptional customer
                    service.
                </p>
            </div>

            <!-- History Section -->
            <div>
                <h2 class="text-2xl font-semibold mb-4">Our History</h2>
                <p class="text-gray-700 leading-relaxed">
                    Founded in 20XX, Your Company Name started as a small family-owned business. Over the years, we have
                    grown into a trusted name in the industry, serving customers across the globe. Our journey has been
                    marked by dedication, hard work, and a passion for excellence.
                </p>
            </div>

            <!-- Team Section -->
            <div>
                <h2 class="text-2xl font-semibold mb-4">Our Team</h2>
                <p class="text-gray-700 leading-relaxed">
                    Our team is made up of passionate professionals who are experts in their fields. We believe in
                    collaboration, creativity, and continuous learning to deliver the best solutions for our customers.
                </p>
            </div>

            <!-- Values Section -->
            <div>
                <h2 class="text-2xl font-semibold mb-4">Our Values</h2>
                <ul class="list-disc list-inside text-gray-700 leading-relaxed">
                    <li><strong>Integrity:</strong> We conduct our business with honesty and transparency.</li>
                    <li><strong>Innovation:</strong> We embrace new ideas and technologies to stay ahead.</li>
                    <li><strong>Customer Focus:</strong> We prioritize the needs and satisfaction of our customers.</li>
                    <li><strong>Sustainability:</strong> We are committed to environmentally friendly practices.</li>
                </ul>
            </div>

            <!-- Call to Action -->
            <div class="text-center mt-8">
                <a href="{{ route('contact-us') }}"
                    class="bg-violet-900 text-white px-6 py-2 rounded-lg hover:bg-violet-700 transition duration-300">
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</div>
@endsection