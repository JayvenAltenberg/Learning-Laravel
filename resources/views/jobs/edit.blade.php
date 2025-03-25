@extends('components.layout')

@section('title', 'Edit Job: ' . $job->title)

@section('content')
<div class="flex justify-center items-center flex-1">
    <form action="/job/{{ $job->id }}" method="POST" class="w-full max-w-lg bg-gray-800 p-6 rounded-lg shadow-lg">
        @csrf
        @method('PATCH')
        <div class="mb-4">
            <x-form-label for="title">Title</x-form-label>
            <x-form-input type="text" id="title" name="title" value="{{$job->title}}"/>
            <x-form-error name="title"/>
        </div>

        <div class="mb-4">
            <x-form-label for="salary">salary</x-form-label>
            <x-form-input type="text" id="salary" name="salary" value="{{ $job->salary }}"/>
            <x-form-error name="salary"/>
        </div>

        <div class="mb-4">
            <x-form-label for="company">Company</x-form-label>
            <x-form-input type="text" id="company" name="company" value="{{ $job->company }}"/>
            <x-form-error name="company"/>
        </div>

        <div class="mb-4">
            <x-form-label for="location">location</x-form-label>
            <x-form-input id="location" name="location" rows="4" value="{{ $job->location }}"/>
            <x-form-error name="location"/>
        </div>
        <!--submit and cancel button-->
        <div class="inline-flex rounded-md shadow-sm space-x-4">
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none">Update</button>
                <a href="/job/{{ $job->id }}" class="px-6 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700 focus:outline-none">Cancel</a>
        </div>
    </form>

    <!-- delete button-->
    <div class="inline-flex items-center justify-end gap-x-6 ">
        <div>
            <button form="delete-form" class="px-6 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none">delete</button>
        </div>
    </div>

    <form method="POST" action="/job/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</div>
@endsection
