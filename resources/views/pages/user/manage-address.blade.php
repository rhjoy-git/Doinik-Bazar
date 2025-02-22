@extends('layouts.infolayout')
@section('title', 'Manage Addresses')

@section('breadcrumbs')
<x-breadcrumbs message="Manage Addresses" />
@endsection

@section('info-content')
<div class="container mx-12 p-4 py-2 ms-10">
    <div class="max-w-screen-xl w-fit h-auto  bg-white rounded-lg p-4">
        <h2 class="text-2xl font-semibold mb-6">Manage Address</h2>

        <!-- Add New Address Button -->
        <div class="mb-4">
            <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded">Add New Address</a>
        </div>

        <!-- Address List -->
        <div class="grid grid-cols-4 gap-4">
            <!-- Static Address 1 -->
            <div class="p-4 border rounded-lg shadow-sm">
                <h3 class="text-lg font-semibold">Home Address</h3>
                <p>123 Main St</p>
                <p>Apt 4B</p>
                <p>New York, NY, 10001</p>
                <p>USA</p>
                <span class="text-green-500">Default Address</span>
                <div class="mt-2">
                    <a href="#" class="text-yellow-500">Edit</a>
                    <form action="#" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 ml-2">Delete</button>
                    </form>
                </div>
            </div>
            <!-- Static Address 2 -->
            <div class="p-4 border rounded-lg shadow-sm">
                <h3 class="text-lg font-semibold">Office Address</h3>
                <p>456 Business Ave</p>
                <p>Suite 200</p>
                <p>San Francisco, CA, 94105</p>
                <p>USA</p>
                <form action="#" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-blue-500">Set as Default</button>
                </form>
                <div class="mt-2">
                    <a href="#" class="text-yellow-500">Edit</a>
                    <form action="#" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 ml-2">Delete</button>
                    </form>
                </div>
            </div>
            <!-- Static Address 3 -->
            <div class="p-4 border rounded-lg shadow-sm">
                <h3 class="text-lg font-semibold">Other Address</h3>
                <p>789 Elm St</p>
                <p>Chicago, IL, 60614</p>
                <p>USA</p>
                <form action="#" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-blue-500">Set as Default</button>
                </form>
                <div class="mt-2">
                    <a href="#" class="text-yellow-500">Edit</a>
                    <form action="#" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 ml-2">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection