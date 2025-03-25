@extends('components.layout')

@section('title', 'Login')

@section('content')
<div class="flex justify-center items-center flex-1">
    <form action="/login" method="POST" class="w-full max-w-lg bg-gray-800 p-6 rounded-lg shadow-lg">
        @csrf
        <!-- Email -->
        <div class="mb-4">
            <x-form-label for="email">Email</x-form-label>
            <x-form-input type="email" id="email" name="email" :value="old('email')" required />
            <!-- for the value i use : so that it can read it as a kind of function not as a string -->
            <!-- it is used to get the last email from the session so that when u do ur logini wrong u dont have to type it all over again -->
            <x-form-error name="email" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-form-label for="password">Password</x-form-label>
            <x-form-input type="password" id="password" name="password" required />
            <x-form-error name="password" />
        </div>

        <!-- Buttons -->
        <div class="inline-flex rounded-md shadow-sm space-x-4">
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none">Login</button>
            <a href="/" class="px-6 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700 focus:outline-none">Cancel</a>
        </div>
    </form>
</div>
@endsection
