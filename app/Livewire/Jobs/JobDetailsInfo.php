<?php

namespace App\Livewire\Jobs;

use Livewire\Component;

class JobDetailsInfo extends Component
{
     public $job;
    public function render()
    {
        return view('livewire.jobs.job-details-info');
    }
}
