<style>
    .job-info {
    max-width: 320px;
  height: 600px;
    background: #fff;
    border: 1px solid #e6e8f0;
    border-radius: 6px;
    padding: 16px;
    font-family: Arial, sans-serif;
}

.job-info-title {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 12px;
}

.job-info-row {
    display: flex;
    flex-direction: column;
    gap: 4px;
    margin-bottom: 12px;
}

.label {
    font-size: 13px;
    color: #6b7280;
}

.value {
    font-size: 14px;
    color: #111827;
}

.value.filled {
    color: #dc2626;
    font-weight: 600;
}

</style>

<div>
   <div class="job-info">
     <h3 class="job-info-title">Job Information</h3>
     <div class="job-info-row">
      <span class="label">Date Opened</span>  
       
      <span class="value">{{ $job->created_at->format('m/d/Y') }}</span>
        </div>
         <div class="job-info-row">
        <span class="label">Job Type</span>
        <span class="value">{{ $job->job_type }}</span>
    </div>
    
    <div class="job-info-row">
        <span class="label">Work Experience</span>
        <span class="value">{{ $job->forwhome }}</span>
    </div>

    <div class="job-info-row">
        <span class="label">Salary</span>
        <span class="value">₹ {{ number_format($job->salary) }}</span>
    </div>

    <div class="job-info-row">
        <span class="label">Location</span>
        <span class="value">{{ $job->location }}</span>
    </div>
</div>
