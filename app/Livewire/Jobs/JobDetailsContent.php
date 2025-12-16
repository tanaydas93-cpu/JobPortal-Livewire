<?php

namespace App\Livewire\Jobs;

use Livewire\Component;

class JobDetailsContent extends Component
{
    public $job;
    public function render()
    {
        return view('livewire.jobs.job-details-content');
    }
}
