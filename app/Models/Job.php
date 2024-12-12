<?php

// u need this to easily access the model with use apps/models etc\\
namespace App\Models;

use Illuminate\Container\Attributes\Tag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_listing';

    //this is used to protect the form from being filled with wrong data
    //a example of this is when the user fills the form with a code that fills the admin table with 1 when u dont want them to have admin
    protected $fillebale = ['title', 'salary'];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
        //this function tells laravel that there is a foreign key in the table with the Employer_id, this is then used to echo the table Employers
        //so if you want to use this u can use this like $job->employer->name
    }

    public function tags()
    {
        return $this->belongsToMany(\App\Models\Tag::class, foreignPivotKey: 'job_listing_id');
        //this is used so that laravel  use Job_id because we use the other naming for the table
    }
}
