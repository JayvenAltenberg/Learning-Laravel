<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    public function jobs()
    {
        return $this->hasMany(Job::class);
        //this function is used for the foreign key to show the jobs table where the employer is the same. We use hasMany becouse a employer can have many jobs
        // You can call this relationship as a collection or access it like an array:
        // Example: $employer->jobs->first() gives the first job,
        //          foreach ($employer->jobs as $job) iterates through all jobs
    }
}
