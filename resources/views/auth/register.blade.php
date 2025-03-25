@extends('components.layout')

@section('title', 'Register')

@section('content')
<div class="flex justify-center items-center flex-1">
    <form action="/register" method="POST" class="w-full max-w-lg bg-gray-800 p-6 rounded-lg shadow-lg">
        @csrf
        <!-- Name -->
        <div class="mb-4">
            <x-form-label for="name">Name</x-form-label>
            <x-form-input type="text" id="name" name="name" required />
            <x-form-error name="name" />
        </div>

        <!-- Email -->
        <div class="mb-4">
            <x-form-label for="email">Email</x-form-label>
            <x-form-input type="email" id="email" name="email" required />
            <x-form-error name="email" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-form-label for="password">Password</x-form-label>
            <x-form-input type="password" id="password" name="password" required />
            <x-form-error name="password" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <x-form-label for="password_confirmation">Confirm Password</x-form-label>
            <x-form-input type="password" id="password_confirmation" name="password_confirmation" required />
            <x-form-error name="password_confirmation" />
        </div>

        <!-- Buttons -->
        <div class="inline-flex rounded-md shadow-sm space-x-4">
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none">Register</button>
            <a href="/" class="px-6 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700 focus:outline-none">Cancel</a>
        </div>
    </form>
</div>
@endsection
