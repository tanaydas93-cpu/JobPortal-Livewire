<?php

namespace App\Livewire\Jobs;

use Livewire\Component;

class JobSearch extends Component
{
 public $what='';
 public $where='';

 public function search() {
    // dd($this->what);
    $this->dispatch(
        'job-search-updated',
        what:$this->what,
        where:$this->where
    );
 }

    public function render()
    {
        return view('livewire.jobs.job-search');
    }
}
