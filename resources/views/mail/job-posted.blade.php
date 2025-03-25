<h1> {{$job->title}}</h1>
<p>your job is posted</p>

<p>
    <a href="{{ url('/job/' . $job->id)}}">Check your job</a>
</p>