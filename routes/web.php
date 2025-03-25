<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\JobListing;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use phpDocumentor\Reflection\Location;

Route::controller(JobController::class)->group(function () {

    Route::redirect('/', '/jobs');
    Route::get('/jobs', 'showAllJobs');
    Route::view('/job/create', 'jobs.create')->middleware('auth');
    Route::get('/job/{job}', 'showJob');
    Route::post('/jobs', 'store')->middleware('auth');
    Route::get('/job/{job}/edit', 'editJob')->middleware('auth')->can('edit', 'job');
    Route::patch('/job/{job}', 'update')->middleware('auth')->can('edit', 'job');
    Route::delete('/job/{job}', 'delete')->middleware('auth')->can('edit', 'job');
});

Route::get('/register', [RegisterController::class, "create"]);
Route::post('/register', [RegisterController::class, "store"]);

route::get('/login', [LoginController::class, "create"])->name('login');
route::post('/login', [LoginController::class, "store"]);
route::post('/logout', [LoginController::class, "destroy"]);
