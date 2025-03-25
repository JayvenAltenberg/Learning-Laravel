@extends('components.layout')

@section('title', 'Job Details')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Job Detail Card -->
    <div class="bg-gray-800 rounded-lg shadow-md p-6">
        <!-- Job Title -->
        <h1 class="text-3xl font-bold text-white mb-4">{{$job['title']}}</h1>
        
        <!-- Job Details -->
        <div class="text-gray-400">
            <p><strong class="text-white">Company: </strong>{{$job->company}}</p>
            <p><strong class="text-white">Location: </strong> {{$job->location}}</p>
            <p><strong class="text-white">Salary: </strong>${{$job->salary}}</p>
            <p><strong class="text-white">employer: </strong>{{$job->employer->name}}</p>
            
        </div>


        <!-- Apply Button -->
        <div class="flex justify-between items-center">
            <a href="#"
               class="bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                Apply Now
            </a>
            @can('edit', $job)
                <a href="/job/{{ $job['id'] }}/edit"
                class="bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 ml-auto">
                    edit job
                </a>
            @endcan
        </div>
        
    </div>
</div>

<!-- Back to Job Listings Button -->
<div class="mt-6 text-center">
    <a href="/jobs" 
       class="text-indigo-400 hover:text-indigo-500 text-sm">
        Back to Job Listings
    </a>
</div>
@endsection
