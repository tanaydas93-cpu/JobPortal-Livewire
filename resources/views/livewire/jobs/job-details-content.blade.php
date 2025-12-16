<style>
    .job-description {
    font-family: Arial, sans-serif;
    color: #333;
    line-height: 1.6;
}

.job-description h3 {
    font-size: 18px;
    margin-top: 20px;
    margin-bottom: 10px;
    color: #2c3e50;
}

.job-description ul {
    padding-left: 20px;
    margin-bottom: 16px;
}

.job-description li {
    margin-bottom: 6px;
    list-style-type: disc;
}

.job-description p {
    margin-bottom: 10px;
}
</style>

<div>
  

<h2>job description</h2>
<p>{{$job->title}}</p>

<div class="job-description">
   {!! $job->job_description !!}
</div>
</div>
