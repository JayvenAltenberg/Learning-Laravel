@extends('components.layout')

@section('title', 'Form Page')

@section('content')
<div class="flex justify-center items-center flex-1">
    <form action="/jobs" method="POST" class="w-full max-w-lg bg-gray-800 p-6 rounded-lg shadow-lg">
        @csrf

        <div class="mb-4">
            <x-form-label for="title">Title</x-form-label>
            <x-form-input type="text" id="title" name="title"/>
            <x-form-error name="title"/>
        </div>

        <div class="mb-4">
            <x-form-label for="salary">Salary</x-form-label>
            <x-form-input type="text" id="salary" name="salary"/>
            <x-form-error name="salary"/>
        </div>

        <div class="mb-4">
            <x-form-label for="company">Company</x-form-label>
            <x-form-input type="text" id="company" name="company"/>
            <x-form-error name="company"/>
        </div>

        <div class="mb-4">
            <x-form-label for="location">Location</x-form-label>
            <x-form-input id="location" name="location" rows="4"/>
            <x-form-error name="company"/>
        </div>
        <!--submit-->
        <div class="flex justify-end">
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none">Submit</button>
        </div>
    </form>
</div>
@endsection
