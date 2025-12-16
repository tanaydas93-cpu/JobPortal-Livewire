<?php

namespace App\Livewire\Jobs;

use Livewire\Component;

class JobFilters extends Component


{

    public array $jobTypes =[];
    public array  $experience =[];
    public array  $salary =[];
   
    public function updated() {
        
        $this->dispatch('job-filters-updated',
            jobTypes:$this->jobTypes,
            exp:$this->experience,
            salary:$this->salary

        );
    }
    public function render()
    {
        return view('livewire.jobs.job-filters');
    }
}
