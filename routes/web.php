<?php

use App\Http\Controllers\AuthManager;
use App\Models\JobListing;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return redirect('/jobs');
});

Route::get('/Register', [AuthManager::class, 'register'])->name('register');


Route::get('/jobs', function () {
    $jobs = Job::with('employer')->paginate(6);
    //this is called eager loading instead of using Job:all i use this function because then it isnt using as a lot of sql statments but rather one  big sql statement
    //the function paginate is used to tell laravel how many jobs to show on one page
    return view('jobs', ['jobs' => $jobs]);
    //the jobs:all() function is inside the folder App/Models/Jobs.php. This is were we get all the jobs from the array.
});


Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});
