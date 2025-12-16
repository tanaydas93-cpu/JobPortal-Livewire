<?php

namespace App\Livewire\Jobs;

use Livewire\Component;
use App\Models\JobList as Joblistmodel;
class JobDetails extends Component
{
    
    public $job;

    public function mount($id) {
        
        $this->job=Joblistmodel::find($id);
    }
    public function render()
    {
        return view('livewire.jobs.job-details');
    }
}
