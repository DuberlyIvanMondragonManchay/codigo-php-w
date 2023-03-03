<?php 

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\Category;
use App\Models\Job;
use App\Models\Profile;
use Livewire\Component;
use Livewire\WithPagination;

class PostulantJobsComponent extends Component
{
    public $id_job;

    public function mount(){
        // $company = Company::find(auth()->user()->company_id);

        $company = Company::find(1);
        $this->company_id = $company->id;
        $this->filters = ['DRAFT', 'STRATEGY_REQUEST'];
        $this->option = 1;
        $this->job_preview = null;

        $this->category = false;
        $this->workday = false;
        $this->modality = false;
        $this->study = false;
        $this->education_status = false;
        $this->hierarchy = false;
        $this->contrac = false;

        $this->hierarchies = [
            'Practicante Profesional',
            'Practicante',
        ];

    }

    public function render()
    {

        $jobs = Job::join('districts', 'jobs.district_id', '=', 'districts.id')
                    ->select('jobs.*', 'districts.name as distrito')
                    ->where('status', 'PUBLISHED')
                    ->orderBy('jobs.id', 'DESC')
                    ->get();
        
        $postulantes = Profile::select('*')->orderBy('id', 'DESC')->get();

        // return redirect()->route('job.edit', ['id_job' => $job->id] );

        return view('livewire.job.postulantjobs', ['jobs' => $jobs, 'postulantes' => $postulantes])->extends('layouts.app')->section('content');


      // return view('livewire.job.index')->extends('layouts.app')->section('content');
    }



}