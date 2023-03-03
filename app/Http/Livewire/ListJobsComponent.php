<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Job;
use Livewire\Component;
use Livewire\WithPagination;

class ListJobsComponent extends Component
{
    // Fecha de publicación
    // Mas antiguos 
    // Más reciente 
    
    // Distrito
    // Años de experiencia
    // Disponibilidad de viajar
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $pagination = 10;

    public $experience_levels, $experience_level;
    public $category, $categories;
    public $workdays, $workday;
    public $modalities, $modality;
    public $contracts, $contract;
    public $studies, $study;
    public $education_status, $education_statuses;
    public $hierarchy, $hierarchies;
    public $job_preview;
    public function mount()
    {
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
            'RHE',
            'Convenio prácticas',
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
   
    public function updatedCategory(){
        $this->job_preview = null;
    }

    public function render()
    {
        $jobs = Job::when($this->experience_level, function ($query, $seniority) {
                return $query->where('seniority', $seniority);
            })
            ->when($this->category, function ($query, $category) {
                return $query->where('category_id', $category);
            })
            ->when($this->workday, function ($query, $workday) {
                return $query->where('workday', $workday);
            })
            ->when($this->modality, function ($query, $modality) {
                return $query->where('working_modality', $modality);
            })
            ->when($this->contract, function ($query, $contract) {
                return $query->where('type_of_contract', $contract);
            })
            ->when($this->study, function ($query, $study) {
                return $query->where('minimum_level_of_education', $study);
            })
            ->when($this->education_status, function ($query, $education_status) {
                return $query->where('education_status', $education_status);
            })
            ->when($this->hierarchy, function ($query, $hierarchy) {
                return $query->where('job_hierarchy', $hierarchy);
            })
            ->paginate($this->pagination);
        return view('livewire.applicants.jobs.list-jobs-component', [
            'jobs' => $jobs,
        ])
            ->extends('layouts.app')
            ->section('content');
    }
    public function preview($id){
        $this->job_preview = Job::find($id);
    }
    // Agregar la opción de notificación a los usuarios postulantes
    
}
