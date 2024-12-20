@extends('layout.layout')

@section('title', 'Form Page')

@section('content')
<div class="flex justify-center items-center flex-1">
    <form action="/jobs" method="POST" class="w-full max-w-lg bg-gray-800 p-6 rounded-lg shadow-lg">
        @csrf

        <div class="mb-4">
            <label for="title" class="block text-lg font-medium text-gray-300">Title</label>
            <input type="text" id="title" name="title" class="w-full p-2 mt-2 rounded-md bg-gray-700 text-white focus:outline-none">
            @error('title')
                <p class="text-xs text-red-500 fint-semibold">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="salary" class="block text-lg font-medium text-gray-300">salary</label>
            <input type="text" id="salary" name="salary" class="w-full p-2 mt-2 rounded-md bg-gray-700 text-white focus:outline-none">
            @error('salary')
                <p class="text-xs text-red-500 fint-semibold">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="company" class="block text-lg font-medium text-gray-300">Company</label>
            <input type="text" id="company" name="company" rows="4" class="w-full p-2 mt-2 rounded-md bg-gray-700 text-white focus:outline-none"></input>
            @error('company')
                <p class="text-xs text-red-500 fint-semibold">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="location" class="block text-lg font-medium text-gray-300">Location</label>
            <input id="location" name="location" rows="4" class="w-full p-2 mt-2 rounded-md bg-gray-700 text-white focus:outline-none"></input>
            @error('location')
                <p class="text-xs text-red-500 fint-semibold">{{ $message }}</p>
            @enderror
        </div>
        {{-- @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif --}}
        <div class="flex justify-end">
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none">Submit</button>
        </div>
    </form>
</div>
@endsection
