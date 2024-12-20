<?php

use App\Http\Controllers\AuthManager;
use App\Models\JobListing;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use phpDocumentor\Reflection\Location;

Route::get('/', function () {
    return redirect('/jobs');
});

Route::get('/Register', [AuthManager::class, 'register'])->name('register');


Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->paginate(6);
    //this is called eager loading instead of using Job:all i use this function because then it isnt using as a lot of sql statments but rather one  big sql statement
    //the function paginate is used to tell laravel how many jobs to show on one page
    return view('jobs.index', ['jobs' => $jobs]);
    //the jobs:all() function is inside the folder App/Models/Jobs.php. This is were we get all the jobs from the array.
});

route::get('/job/create', function () {
    return view('jobs.create');
});
//job/create has to be before /job/{id} becouse this is a wildcard and see anything as a id

Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', 'integer', 'min:0'],
        'company' => ['required', 'min:3'],
        'location' => ['required']
    ]);
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'company' => request('company'),
        'location' => request('location'),
        'employer_id' => 1
    ]);
    //request is used to get the data from a form u can also use request->all.
    return(redirect('/jobs'));
}); 
