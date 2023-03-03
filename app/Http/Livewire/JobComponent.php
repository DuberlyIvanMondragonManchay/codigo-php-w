<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\Category;
use App\Models\Job;
use Livewire\Component;
use Livewire\WithPagination;

class JobComponent extends Component
{
    use WithPagination;
   
    public $company_id;
    public $pagination = 10;
    public $filters = array();
    public $option;
 

    public $experience_levels, $experience_level;
    public $category, $categories;
    public $workdays, $workday;
    public $modalities, $modality;
    public $contracts, $contract;
    public $studies, $study;
    public $education_status, $education_statuses;
    public $hierarchy, $hierarchies;
    public $job_preview;


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

        $this->contracts = [
            'Planilla',
            'Contractor',
            'Freelancer',
            'Convenio de prácticas',

        ];
        $this->experience_levels = [
            'Sin experiencia',
            'Junior',
            'Semi senior',
            'Senior',
            'Experto',
        ];
        $this->categories = Category::all();
        $this->workdays = [
            'Full time',
            'Part time',
            'Por horas',
        ];
        $this->modalities = [
            'Presencial',
            'Remoto local',
            'Remoto total',
            'Mixto (Presencial y remoto)',
        ];
        $this->studies = [
            'Secundaria',
            'Instituto',
            'Universidad',
            'Maestría',
            'Doctorado',
            'Especialización',
            'Taller/Curso',
        ];
        $this->education_statuses = [
            'Incompleta',
            'Estudiando',
            'Egresado',
            'Bachiller',
            'Titulado',
            'Colegiado',
        ];
        $this->hierarchies = [
            'Practicante Profesional',
            'Practicante',
        ];

    }

    public function render()
    {
        // Hacerla búsqueda por nombre, estados y encargados 
        // $company = Company::find(auth()->user()->company_id);
      
        // $company = Company::find(2);

        // $jobs = Job::where('company_id', $company->id)->where('status', $this->filters)->orderBy('id', 'DESC')->paginate($this->pagination);
        // $jobs = Job::where('status', 'DRAFT')->orderBy('id', 'DESC')->paginate($this->pagination);
        



        // $jobs = Job::select('*')->orderBy('id', 'DESC')->get();


        $jobs = Job::join('districts', 'jobs.district_id', '=', 'districts.id')
                    ->select('jobs.*', 'districts.name as distrito')
                    ->where('status', 'DRAFT')
                    ->orderBy('jobs.id', 'DESC')
                    ->get();

        // $jobs = Job::when($this->experience_level, function ($query, $seniority) {
        //         return $query->where('seniority', $seniority);
        //     })
        //     ->when($this->category, function ($query, $category) {
        //         return $query->where('category_id', $category);
        //     })
        //     ->when($this->workday, function ($query, $workday) {
        //         return $query->where('workday', $workday);
        //     })
        //     ->when($this->modality, function ($query, $modality) {
        //         return $query->where('working_modality', $modality);
        //     })
        //     ->when($this->contract, function ($query, $contract) {
        //         return $query->where('type_of_contract', $contract);
        //     })
        //     ->when($this->study, function ($query, $study) {
        //         return $query->where('minimum_level_of_education', $study);
        //     })
        //     ->when($this->education_status, function ($query, $education_status) {
        //         return $query->where('education_status', $education_status);
        //     })
        //     ->when($this->hierarchy, function ($query, $hierarchy) {
        //         return $query->where('job_hierarchy', $hierarchy);
        //     })
        //     ->paginate($this->pagination);

        

        // return view('livewire.job.index')
        // ->extends('layouts.app')
        // ->section('content');

        return view('livewire.job.index', ['jobs' => $jobs])
        ->extends('layouts.app')
        ->section('content');


    }

    public function listJobs(){

        $jobs = Job::join('districts', 'jobs.district_id', '=', 'districts.id')
                    ->select('jobs.*', 'districts.name as distrito')
                    ->where('status', 'DRAFT')
                    ->orderBy('jobs.id', 'DESC')
                    ->get();

        return view('livewire.job.datos')->extends('layouts.app')->section('content');
    }

    public function change_filter($condition){
       
        if ($condition == 'option1') {
            $this->filters = ['DRAFT', 'STRATEGY_REQUEST', 'STRATEGIC_IN_PROCESS', 'STRATEGIC_FINISHED'];
        }else if($condition == 'option2'){
            $this->filters = ['PUBLISHED'];
        }else{
            $this->filters = ['SUCCESSFUL_CLOSING', 'CLOSED_FAILED', 'CLOSED_TRUNCATED', 'CLOSED_FOR_PAUSE', 'CLOSED_DUE_TO_EXPIRATION'];
        }
    }

}
