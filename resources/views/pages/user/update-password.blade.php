@extends('layouts.infolayout')
@section('title')
- Update Password
@endsection

{{-- breadcrumbs --}}
@section('breadcrumbs')
<x-breadcrumbs message="Change Password" />
@endsection

{{-- info-content --}}
@section('info-content')
<div class="container mx-12 p-4 py-2 ms-10">
    <div class="max-w-screen-sm w-1/2 h-auto  bg-white rounded-lg p-4">
        <h2 class="text-2xl font-semibold mb-6">Change Password</h2>
        <form action="{{ route('update.password') }}" method="POST" class="py-8">
            @csrf

            {{-- Old Password --}}
            <div class="mb-4">
                <label for="old_password" class="block text-sm font-medium text-gray-700">Old Password</label>
                <input type="password" name="old_password" id="old_password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                @error('old_password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- New Password --}}
            <div class="mb-4">
                <label for="new_password" class="block text-sm font-medium text-gray-700">New Password</label>
                <input type="password" name="new_password" id="new_password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                @error('new_password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Confirm New Password --}}
            <div class="mb-6">
                <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                @error('new_password_confirmation')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Save Button --}}
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                    Save Changes
                </button>
            </div>
        </form>
    </div>
</div>
@endsection