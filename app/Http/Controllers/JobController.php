<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function showAllJobs()
    {
        $jobs = Job::with('employer')->latest()->paginate(6);
        //this is called eager loading instead of using Job:all i use this function because then it isnt using as a lot of sql statments but rather one  big sql statement
        //the function paginate is used to tell laravel how many jobs to show on one page
        return view('jobs.index', ['jobs' => $jobs]);
        //the jobs:all() function is inside the folder App/Models/Jobs.php. This is were we get all the jobs from the array.
    }

    public function showJob(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function editJob(Job $job)
    {

        // Gate::authorize('edit-job', $job);
        // instead of doing this in the controller i do this in the route
        // When you call Gate::authorize('edit-job', $job), it checks the logic in the Gate::define('edit-job') function. If it is false it return a 403
        //and now this is a policy instead of a gate

        return view('jobs.edit', ['job' => $job]);
    }

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'integer', 'min:0'],
            'company' => ['required', 'min:3'],
            'location' => ['required']
        ]);
        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'company' => request('company'),
            'location' => request('location'),
            'employer_id' => 1
        ]);
        //send job

        mail::to($job->employer->user)->queue(
            new \App\Mail\JobPosted($job)
        );
        return 'done';

        //request is used to get the data from a form u can also use request->all.
        return (redirect('/jobs'));
    }

    public function update(Job $job)
    {
        //validate
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'integer', 'min:0'],
            'company' => ['required', 'min:3'],
            'location' => ['required']
        ]);
        //autorize
        //update the job
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
            'company' => request('company'),
            'location' => request('location'),
        ]);
        return redirect('/job/' . $job->id);
    }

    public function delete(Job $job)
    {
        //autorise
        //delete the job
        $job->delete();
        return redirect('/jobs');
    }
}
