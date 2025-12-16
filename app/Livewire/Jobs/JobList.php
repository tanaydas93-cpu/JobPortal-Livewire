<?php

namespace App\Livewire\Jobs;
use Livewire\withPagination;
use Livewire\Component;
use App\Models\JobList as Joblistmodel;
use Livewire\Attributes\On;
class JobList extends Component
{  
    use WithPagination;
   protected $paginationTheme='bootstrap';
    public $what='';
    public $where='';

    public array $jobTypes=[];
    public array $experience=[];
      public array $salary=[];
    #[On('job-filters-updated')]
    public function updateFilters($jobTypes,$exp,$salary) {
        $this->jobTypes =$jobTypes;
        $this->experience =$exp;
        $this->salary =$salary;
         $this->resetPage();
    }
    // public $joblists=[];
    
    // public function mount(){
    //     //   sleep(3);
    //     $this->joblists=Joblistmodel::all();
    //         // dd($this->joblists);
    // }
     public function placeholder()
    {
        return <<<'HTML'
         <div style="padding: 20px; text-align: center;">
            <h3>Jai Guru!</h3>
            <p>Loading jobs...</p>
        </div>
        HTML;
    }
    #[On('job-search-updated')]
    public function updatejobs($what,$where) {
        $this->what=$what;
        $this->where=$where;
        $this->resetPage();
    }

    
    public function render()
       
    {
        $joblists=Joblistmodel::query()->
        when( $this->what,function($q) {
          $q->where('title','like',"%{$this->what}%");
          
        })->when(
            $this->where,function($q) {
                $q->where('location','like',"%{$this->where}%");
            })->when(
                $this->jobTypes,function($q){
                $q->wherein('job_type', $this->jobTypes);
                }
            )->when(
                $this->experience,function($q){
                $q->wherein('forwhome', $this->experience);
                })
            ->when(
                $this->salary,function($q){
                $q->wherein('salary', $this->salary);
                })
            ->latest()->paginate(5);
            return view('livewire.jobs.job-list',compact('joblists') );
    }
}
