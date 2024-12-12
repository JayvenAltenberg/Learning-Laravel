<!DOCTYPE html>
@extends('layout.layout')

@section('title', 'Register')

@section('content')
<!-- Registration Form -->
<div class="flex justify-center items-center flex-grow">
    <div class="w-full max-w-lg bg-gray-800 rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-semibold mb-6 text-center">Register</h2>
        
        <form action="#" method="POST">
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2" for="username">Username</label>
                <input type="text" id="username" name="username" 
                       class="w-full px-3 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>
            
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2" for="email">Email</label>
                <input type="email" id="email" name="email" 
                       class="w-full px-3 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>
            
            <div class="mb-4">
                <label class="block text-sm font-medium mb-2" for="password">Password</label>
                <input type="password" id="password" name="password" 
                       class="w-full px-3 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>
            
            <div class="mb-6">
                <label class="block text-sm font-medium mb-2" for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" 
                       class="w-full px-3 py-2 bg-gray-700 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
            </div>
            
            <button type="submit" 
                    class="w-full py-2 px-4 bg-indigo-600 hover:bg-indigo-700 rounded-lg font-semibold text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
                Register
            </button>
        </form>

        <p class="text-center text-sm mt-4">
            Already have an account? <a href="#" class="text-indigo-400 hover:text-indigo-500">Log in</a>
        </p>
    </div>
</div>
@endsection
