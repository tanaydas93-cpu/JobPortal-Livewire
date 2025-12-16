@once
@push('styles')
<style>
.job-card {
  display: grid;
  grid-template-columns: 3fr 1fr;
  border: 1px solid #e0e0e0;
  padding: 16px;
  max-width: 1200px;
  font-family: Arial, sans-serif;
}

.left {
  display: grid;
  gap: 6px;
}

.right {
  display: grid;
  justify-items: end;
  align-content: space-between;
}

.title {
  color: #ff6a00;
  font-size: 16px;
  margin: 0;
}

.location,
.open,
.desc,
.type,
.date {
  font-size: 13px;
  margin: 0;
  color: #444;
}

.type {
  font-weight: 600;
}
</style>
@endpush
@endonce
<div>
@foreach($joblists as $joblist)
<div class="job-card">
    <div class="left">
      <a href="/jobs/{{$joblist->id}}">
 <h3 class="title">{{$joblist->title}}</h3>

      </a>
       
        <p class="location">{{$joblist->location}}</p>
        <p class="open">{{$joblist->forwhome}}</p>

        <p class="desc">
           {{ \Illuminate\Support\Str::limit($joblist->details, 50, '') }}
        </p>
    </div>

    <div class="right">
        <p class="type">{{$joblist->job_type}}</p>
        <p class="date">{{$joblist->created_at->format('Y-m-d')}}</p>
    </div>

</div>
@endforeach

<div>
  {{$joblists->links()}}
</div>
</div>