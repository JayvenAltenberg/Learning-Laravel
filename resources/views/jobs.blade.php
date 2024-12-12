@extends('layout.layout')

@section('title', 'Job Listings')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-center mb-8">Job Listings</h1>
    
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($jobs as $job)
            <div class="bg-gray-800 rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold mb-2">{{ $job['title'] }}</h2>
                <p class="mb-2">Location: <span class="text-gray-400">{{ $job['location'] }}</span></p>
                <p class="mb-2">salary <span class="text-gray-400">${{ $job['salary'] }}</span></p>
                <p class="mb-2">employer: <span class="text-gray-400">{{ $job->employer->name }}</span></p>
                <a href="/job/{{ $job['id'] }}"
                    class="bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    More info
                </a>
            </div>
        @endforeach
        <div>
            {{ $jobs->links() }}
            <!--this is used for the paginator pages -->
        </div>
    </div>
</div>
@endsection
