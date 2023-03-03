<?php

namespace App\Http\Livewire;

use App\Models\Benefit;
use App\Models\Category;
use App\Models\Company;
use App\Models\Country;
use App\Models\Department;
use App\Models\District;
use App\Models\Experience;
use App\Models\Job;
use App\Models\Knowledge;
use App\Models\Province;
use App\Models\Question;
use App\Models\Responsibility;
use App\Models\Specialization;
use App\Models\Stage;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CreateJobComponent extends Component
{
    public $id_job;
    public $recruiting_another_company, $category_id;
    public $name, $third_party_name, $hide_company_name, $user_id, $company_id;
    public $company_name;
    public $company;
    public $country, $data_country, $data_department, $data_province, $data_district, $data_specialties = [];
    public $data_benefits;
    public $department, $province, $district_id;
    public $workday, $type_of_contract, $working_modality, $minimum_level_of_education, $education_status, $job_hierarchy, $seniority;
    public $data_workday, $data_type_of_contract, $data_working_modality, $data_seniority, $data_minimum_level_of_education, $data_education_status, $data_job_hierarchy, $data_category, $data_specialty;
    public $minimum_salary, $maximum_salary, $exact_salary, $show_exact_salary, $Company_description, $job_description, $currency, $detail_requirements, $detail_benefits;
    public $knowledge_title, $minimum_acceptable;
    public $inputs = [];
    public $i = 0;
    public $title_responsibilities,$minimum_acceptable_responsibilities,$function_responsibilities;
    public $inputs_responsibilities = [];
    public $i_responsibilities = 0;
    
    public $experience_inputs = [];
    public $experience_i = 0;
   
    public $question_inputs = [];
    public $question_i = 0;
    public $stages;
    public $specialties = [];
    public $currencies;
    public $data_knowledge;

    public $knowledge_title_array= [];
    public $minimum_acceptable_array= [];

    public $title_responsibility;
    public $minimum_acceptable_responsibility;
    public $function_responsibility;
    public $data_responsibilities = [];
    public $title_responsibilities_array = [];
    public $minimum_acceptable_responsibilities_array = [];
    public $function_responsibilities_array = [];

    public $data_experience = [];
    public $experience_title_array = [];
    public $experience_minimum_acceptable_array = [];
    public $experience_title;
    public $experience_minimum_acceptable;

    public $data_question = [];
    public $question_title_array = [];
    public $question_type_array = [];
    public $question_title;
    public $question_type;
    public $data_stages;

    public function updated()
    {
        $job = Job::find($this->id_job);
       
        if ($this->name != $job->name) {
            $job->name = $this->name;
            $job->save();
        }
        if($this->hide_company_name != $job->hide_company_name){
            $job->hide_company_name = $this->hide_company_name;
            $job->save();
        }
        if($this->recruiting_another_company != $job->recruiting_another_company){
            $job->recruiting_another_company = $this->recruiting_another_company;
            $job->save();

            if ($this->recruiting_another_company == false) {
                $this->third_party_name = null;
                $job->third_party_name = null;
                $job->save();
            }
        }
        if ($this->third_party_name != $job->third_party_name) {
            $job->third_party_name = $this->third_party_name;
            $job->save();
        }

        if ($this->workday != 'choose' && $this->workday != $job->workday) {
            $job->workday = $this->workday;
            $job->save(); 
        }

        if ($this->type_of_contract != 'choose' && $this->type_of_contract != $job->type_of_contract) {
            $job->type_of_contract = $this->type_of_contract;
            $job->save(); 
        }
        
        if ($this->working_modality != 'choose' && $this->working_modality != $job->working_modality) {
            $job->working_modality = $this->working_modality;
            $job->save(); 
        }
        if ($this->district_id != $job->district_id && $this->district_id != 'choose') {
            $job->district_id = $this->district_id;
            $job->save();
        }
        if ($this->seniority != 'choose' && $this->seniority != $job->seniority) {
            $job->seniority = $this->seniority;
            $job->save(); 
        }
        if ($this->minimum_level_of_education != 'choose' && $this->minimum_level_of_education != $job->minimum_level_of_education) {
            $job->minimum_level_of_education = $this->minimum_level_of_education;
            $job->save(); 
        }
        if ($this->education_status != 'choose' && $this->education_status != $job->education_status) {
            $job->education_status = $this->education_status;
            $job->save(); 
        }
        if ($this->job_hierarchy != 'choose' && $this->job_hierarchy != $job->job_hierarchy) {
            $job->job_hierarchy = $this->job_hierarchy;
            $job->save(); 
        }
        if ($this->category_id != 'choose' && $this->category_id != $job->category_id) {
            $job->category_id = $this->category_id;
            $job->save(); 
        }
        if ($this->minimum_salary != $job->minimum_salary) {
            $job->minimum_salary = $this->minimum_salary;
            $job->save();
        }
        if ($this->maximum_salary != $job->maximum_salary) {
            $job->maximum_salary = $this->maximum_salary;
            $job->save();
        }
        //Validar que el salario máximo se a mayor que el mínimo
        if ($this->currency != 'choose' && $this->currency != $job->currency) {
            $job->currency = $this->currency;
            $job->save(); 
        }
        if ($this->exact_salary != $job->exact_salary) {
            $job->exact_salary = $this->exact_salary;
            $job->save();
        }
        if($this->show_exact_salary != $job->show_exact_salary){
            $job->show_exact_salary = $this->show_exact_salary;
            $job->save();
        }
        // textarea
        if ($this->Company_description != $job->Company_description) {
            $job->Company_description = $this->Company_description;
            $job->save();
        }
        if ($this->job_description != $job->job_description) {
            $job->job_description = $this->job_description;
            $job->save();
        }
        if ($this->detail_requirements != $job->detail_requirements) {
            $job->detail_requirements = $this->detail_requirements;
            $job->save();
        }
        if ($this->detail_benefits != $job->detail_benefits) {
            $job->detail_benefits = $this->detail_benefits;
            $job->save();
        }   

        if ($job->category_id == null) {
            $this->category_id = 'choose';
        } else {
            $this->category_id = $job->category_id;
            $this->data_specialties = Specialization::where('category_id', $job->category_id)->select('id', 'name', 'category_id', DB::raw("0 as checked"))
            ->get();
            foreach ($this->data_specialties as $key => $specialty) {
                $has_specialty = $job->hasSpecialty($specialty->id);
                if ($has_specialty) {
                    $specialty->checked = 1;
                }
            }
            // hacer la vista para saber cuáles están marcados 
        }
        $this->data_benefits = Benefit::select('id', 'icon', 'name', DB::raw("0 as checked"))
        ->get();
        foreach ($this->data_benefits as $key => $benefits) {
            $has_benefit = $job->hasBenefit($benefits->id);
            if ($has_benefit) {
                $benefits->checked = 1;
            }
        }
        // Actualizar knowledge
        foreach ($this->knowledge_title_array as $key => $value) {
            $knowledge = Knowledge::find($key);
            if ($knowledge->title != $value) {
                $knowledge->title = $value;
                $knowledge->save();
            }
        }
        foreach ($this->minimum_acceptable_array as $key => $value) {
            $knowledge = Knowledge::find($key);
            if ($knowledge->minimum_acceptable != $value) {
                $knowledge->minimum_acceptable = $value;
                $knowledge->save();
            }
        }
        // Actualizar responsibilities
        foreach ($this->title_responsibilities_array as $key => $value) {
            $responsibility = Responsibility::find($key);
            if ($responsibility->title != $value) {
                $responsibility->title = $value;
                $responsibility->save();
            }
        }
        foreach ($this->minimum_acceptable_responsibilities_array as $key => $value) {
            $responsibility = Responsibility::find($key);
            if ($responsibility->minimum_acceptable != $value) {
                $responsibility->minimum_acceptable = $value;
                $responsibility->save();
            }
        }
        foreach ($this->function_responsibilities_array as $key => $value) {
            $responsibility = Responsibility::find($key);
            if ($responsibility->function != $value) {
                $responsibility->function = $value;
                $responsibility->save();
            }
        }
        foreach ($this->experience_title_array as $key => $value) {
            $experience = Experience::find($key);
            if ($experience->title != $value) {
                $experience->title = $value;
                $experience->save();
            }
        }
        foreach ($this->experience_minimum_acceptable_array as $key => $value) {
            $experience = Experience::find($key);
            if ($experience->minimum_acceptable != $value) {
                $experience->minimum_acceptable = $value;
                $experience->save();
            }
        }
        foreach ($this->question_title_array as $key => $value) {
            $question = Question::find($key);
            if ($question->title != $value) {
                $question->title = $value;
                $question->save();
            }
        }
        foreach ($this->question_type_array as $key => $value) {
            $question = Question::find($key);
            if ($question->question_type != $value) {
                $question->question_type = $value;
                $question->save();
            }
        }

        $this->data_stages = Stage::select('id', 'title', DB::raw("0 as checked"))
        ->get();
        foreach ($this->data_stages as $key => $stage) {
            $has_stage = $job->hasStage($stage->id);
            if ($has_stage) {
                $stage->checked = 1;
            }
        }

    }
    public function mount(){
        $this->stages = Stage::all();
        // $company = Company::find(auth()->user()->company_id);
        $company = Company::find(1);
        $this->company_name = $company->business_name;
        $job = Job::find($this->id_job);
        $this->initialize_variables($job, $job->district_id);

        $this->currencies= [
            'Peso argentino',
            'Boliviano',
            'Real brasileño',
            'Peso chileno',
            'Peso colombiano',
            'Colón costarricense',
            'Peso cubano',
            'Dólar estadounidense',
            'Quetzal',
            'Gourde',
            'Lempira',
            'Peso mexicano',
            'Córdoba',
            'Balboa',
            'Guaraní',
            'Sol',
            'Peso dominicano',
            'Peso uruguayo',
            'Bolívar',
        ];
        $this->data_workday = [
            'Full time', 
            'Part time', 
            'Por horas', 
        ];
        $this->data_type_of_contract = [
            'Planilla',
            'Contractor',
            'Freelancer',
            'Convenio de prácticas',
        ];
        $this->data_working_modality = [
            'Presencial',
            'Remoto local',
            'Remoto total',
            'Híbrido (Presencial y remoto)',
        ];
        $this->data_seniority = [
            'Sin experiencia',
            'Junior',
            'Semi senior',
            'Senior',
            'Experto',
        ];
        $this->data_minimum_level_of_education = [
            'Secundaria',
            'Instituto',
            'Universidad',
            'Maestría',
            'Doctorado',
            'Especialización/Curso',
        ];
        $this->data_education_status = [
            'Incompleta/trunco',
            'Estudiando',
            'Egresado',
            'Bachiller',
            'Titulado',
            'Colegiado',
        ];
        $this->data_job_hierarchy = [
            'Practicante Profesional',
            'Practicante',
        ];
        $this->data_category = Category::orderBy('id', 'DESC')->get();
        $this->data_specialty = [];
        $this->category = 'choose';
        $this->specialty = 'choose';

        $this->title_responsibilities[0] = [];
        $this->minimum_acceptable_responsibilities[0] = 'choose';
        $this->function_responsibilities[0] = 'choose';

    }

    public function render()
    {
        return view('livewire.job.create')
        ->extends('layouts.app')
        ->section('content');
    }

    public function get_departments(){
        $tem_country = Country::find($this->country);
        $this->data_department = $tem_country->departments;
        
        // $this->data_district = [];
        $this->department = 'choose';
        $this->province = 'choose';
        $this->district_id = 'choose';
    }

    public function get_provinces(){
        $tem_departments = Department::find($this->department);
        $this->data_province = $tem_departments->provinces;
        
        // $this->data_district = [];
        
        $this->province = 'choose';
        $this->district_id = 'choose';
    }

    public function get_district(){
        $tem_province = Province::find($this->province);
        $this->data_district = $tem_province->districts;

        $this->district_id = 'choose';
    }

    public function get_specialties(){
        $tem_category = Category::find($this->category_id);
        $this->data_specialties = $tem_category->specialties;
        $job = Job::find($this->id_job);
        $job->specializations()->detach();
    }

    public function initialize_variables($job, $id_district){
        if(!(is_null($job->name))){
            $this->name = $job->name;
        }
        $this->hide_company_name = $job->hide_company_name;
        $this->recruiting_another_company = $job->recruiting_another_company;
        $this->third_party_name = $job->third_party_name;

        if ($job->workday == null) {
            $this->workday = 'choose';
        }else{
            $this->workday = $job->workday;
        }

        if ($job->type_of_contract == null) {
            $this->type_of_contract = 'choose';
        }else{
            $this->type_of_contract = $job->type_of_contract;
        }

        if ($job->working_modality == null) {
            $this->working_modality = 'choose';
        }else{
            $this->working_modality = $job->working_modality;
        }
        if (is_null($id_district)) {
            $this->data_country = Country::all();
            $this->data_department = [];
            $this->data_province = [];
            $this->data_district = [];

            $this->country = 'choose';
            $this->department = 'choose';
            $this->province = 'choose';
            $this->district_id = 'choose';
        } else {
            $this->data_country = Country::all();
            $district = District::find($id_district);
            $country = Country::find($district->province->department->country->id);
            $this->data_department = $country->departments;
            $department = Department::find($district->province->department->id);
            $this->data_province = $department->provinces;
            $province = Province::find($district->province->id);
            $this->data_district = $province->districts;
        
            $this->country = $country->id;
            $this->department = $district->province->department->id;
            $this->province = $district->province->id;
            $this->district_id = $district->id;
        }
        if ($job->seniority == null) {
            $this->seniority = 'choose';
        }else{
            $this->seniority = $job->seniority;
        }
        if ($job->minimum_level_of_education == null) {
            $this->minimum_level_of_education = 'choose';
        }else{
            $this->minimum_level_of_education = $job->minimum_level_of_education;
        }
        if ($job->education_status == null) {
            $this->education_status = 'choose';
        }else{
            $this->education_status = $job->education_status;
        }
        if ($job->job_hierarchy == null) {
            $this->job_hierarchy = 'choose';
        }else{
            $this->job_hierarchy = $job->job_hierarchy;
        }
        if ($job->category_id == null) {
            $this->category_id = 'choose';
        }else{
            $this->category_id = $job->category_id;
            $this->data_specialties = Specialization::where('category_id', $job->category_id)->select('id', 'name', 'category_id', DB::raw("0 as checked"))
            ->get();
            foreach ($this->data_specialties as $key => $specialty) {
                $has_specialty = $job->hasSpecialty($specialty->id);
                if ($has_specialty) {
                    $specialty->checked = 1;
                }
            }
            // hacer la vista para saber cuáles están marcados 
        }
        $this->minimum_salary = $job->minimum_salary;
        $this->maximum_salary = $job->maximum_salary;
        if ($job->currency == null) {
            $this->currency = 'choose';
        }else{
            $this->currency = $job->currency;
        }
        $this->exact_salary = $job->exact_salary;
        $this->show_exact_salary = $job->show_exact_salary;
        $this->Company_description = $job->Company_description;
        $this->job_description = $job->job_description;
        $this->detail_requirements = $job->detail_requirements;
        $this->detail_benefits = $job->detail_benefits;
        $this->data_benefits = Benefit::select('id', 'icon', 'name', DB::raw("0 as checked"))
        ->get();
        foreach ($this->data_benefits as $key => $benefits) {
            $has_benefit = $job->hasBenefit($benefits->id);
            if ($has_benefit) {
                $benefits->checked = 1;
            }
        }
        $this->knowledge_title = null;
        $this->minimum_acceptable = 'choose';
        // hacerlo en update
        $this->data_knowledge = Knowledge::where('job_id', $job->id)->get();
        foreach ($this->data_knowledge as $key => $value) {
            $this->knowledge_title_array[$value->id] = $value->title;
            $this->minimum_acceptable_array[$value->id] = $value->minimum_acceptable;
        }
        $this->data_responsibilities = Responsibility::where('job_id', $job->id)->get();
        foreach ($this->data_responsibilities as $key => $value) {
            $this->title_responsibilities_array[$value->id] =  $value->title;
            $this->minimum_acceptable_responsibilities_array[$value->id] =  $value->minimum_acceptable;
            $this->function_responsibilities_array[$value->id] =  $value->function;
        }
        $this->data_experience = Experience::where('job_id', $job->id)->get();
        foreach ($this->data_experience as $key => $value) {
            $this->experience_title_array[$value->id] = $value->title;
            $this->experience_minimum_acceptable_array[$value->id] = $value->minimum_acceptable;
        }
        $this->data_question = Question::where('job_id', $job->id)->get();
        foreach ($this->data_question as $key => $value) {
            $this->question_title_array[$value->id] = $value->title;
            $this->question_type_array[$value->id] = $value->question_type;
        }
        $this->data_stages = Stage::select('id', 'title', DB::raw("0 as checked"))
        ->get();
        foreach ($this->data_stages as $key => $stage) {
            $has_stage = $job->hasStage($stage->id);
            if ($has_stage) {
                $stage->checked = 1;
            }
        }
    }

    public function sync_specialties($id){
        $job = Job::find($this->id_job);
        $this->data_specialties = Specialization::where('category_id', $this->category_id)->select('id', 'name', 'category_id', DB::raw("0 as checked"))
        ->get();
        foreach ($this->data_specialties as $key => $specialty) {
            $has_specialty = $job->hasSpecialty($specialty->id);
            if ($has_specialty) {
                $specialty->checked = 1;
                //Si tiene la especialidad
                if ($specialty->id == $id) {
                    $job->specializations()->detach($id);
                }
            }else{
                //No tiene la especialidad
                if ($specialty->id == $id) {
                    $job->specializations()->attach($id);
                }
            }
        }
    }

    public function sync_benefits($id){
        // hacer lo mismo que sync_specialties
        $job = Job::find($this->id_job);
        $this->data_benefits = Benefit::select('id', 'icon', 'name', DB::raw("0 as checked"))
        ->get();
        foreach ($this->data_benefits as $key => $benefit) {
            $has_benefit = $job->hasBenefit($benefit->id);
            if ($has_benefit) {
                $benefit->checked = 1;
                //Si tiene la especialidad
                if ($benefit->id == $id) {
                    $job->benefits()->detach($id);
                }
            }else{
                //No tiene la especialidad
                if ($benefit->id == $id) {
                    $job->benefits()->attach($id);
                }
            }
        }
    }

    public function add_knowledge(){
        $job = Job::find($this->id_job);
        $knowledge = Knowledge::create([
            'title' => $this->knowledge_title,
            'minimum_acceptable' => $this->minimum_acceptable,
            'job_id' => $job->id,
        ]);

        $this->data_knowledge = Knowledge::where('job_id', $job->id)->get();

        $this->knowledge_title_array[$knowledge->id] = $knowledge->title;
        $this->minimum_acceptable_array[$knowledge->id] = $knowledge->minimum_acceptable;

        $this->knowledge_title = null;
        $this->minimum_acceptable = 'choose';

        $this->updated();
    }

    public function remove_knowledge($id){
        $job = Job::find($this->id_job);
        $knowledge = Knowledge::find($id);
        $knowledge->delete();

        unset($this->knowledge_title_array[$knowledge->id]);
        unset($this->minimum_acceptable_array[$knowledge->id]);

        $this->data_knowledge = Knowledge::where('job_id', $job->id)->get();
        $this->updated();
    }

    public function add_responsibility(){
        $job = Job::find($this->id_job);
        $responsibility = Responsibility::create([
            'title' => $this->title_responsibility,
            'minimum_acceptable' => $this->minimum_acceptable_responsibility,
            'function' => $this->function_responsibility,
            'job_id' => $job->id,
        ]);
        $this->data_responsibilities = Responsibility::where('job_id', $job->id)->get();
        $this->title_responsibilities_array[$responsibility->id] = $responsibility->title;
        $this->minimum_acceptable_responsibilities_array[$responsibility->id] = $responsibility->minimum_acceptable;
        $this->function_responsibilities_array[$responsibility->id] = $responsibility->function;

        $this->title_responsibility = null;
        $this->minimum_acceptable_responsibility = 'choose';
        $this->function_responsibility = 'choose';

        $this->updated();
    }

    public function remove_responsibilities($id){
        $job = Job::find($this->id_job);
        $responsibility = Responsibility::find($id);
        $responsibility->delete();
        unset($this->title_responsibilities_array[$responsibility->id]);
        unset($this->minimum_acceptable_responsibilities_array[$responsibility->id]);
        unset($this->function_responsibilities_array[$responsibility->id]);
        $this->data_responsibilities = Responsibility::where('job_id', $job->id)->get();
        $this->updated();
    }

    public function add_experience(){
        $job = Job::find($this->id_job);
        $experience = Experience::create([
            'title' => $this->experience_title,
            'minimum_acceptable' => $this->experience_minimum_acceptable,
            'job_id' => $job->id,
        ]);
        $this->data_experience = Experience::where('job_id', $job->id)->get();
        $this->experience_title_array[$experience->id] = $experience->title;
        $this->experience_minimum_acceptable_array[$experience->id] = $experience->minimum_acceptable;
        $this->experience_title = null;
        $this->experience_minimum_acceptable = 'choose';
        $this->updated();
    }

    public function remove_experience($id){
        $job = Job::find($this->id_job);
        $experience = Experience::find($id);
        $experience->delete();

        unset($this->experience_title_array[$experience->id]);
        unset($this->experience_minimum_acceptable_array[$experience->id]);

        $this->data_experience = Experience::where('job_id', $job->id)->get();
        $this->updated();
    }

    public function question_add(){
        $job = Job::find($this->id_job);
        $question = Question::create([
            'job_id' => $job->id,
            'title' =>  $this->question_title,
            'question_type' =>  $this->question_type,
        ]);
        $this->data_question = Question::where('job_id', $job->id)->get();

        $this->question_title_array[$question->id] = $question->title;
        $this->question_type_array[$question->id] = $question->question_type;
        
        $this->question_title = null;
        $this->question_type = 'choose';
        $this->updated();
    }

    public function question_remove($id){
        $job = Job::find($this->id_job);
        $question = Question::find($id);
        $question->delete();
        unset($this->question_title_array[$question->id]);
        unset($this->question_type_array[$question->id]);
        $this->data_question = Question::where('job_id', $job->id)->get();
        $this->updated();
    }

    public function sync_stages($id){
        $job = Job::find($this->id_job);
        $this->data_stages = Stage::select('id', 'title', DB::raw("0 as checked"))
        ->get();
        foreach ($this->data_stages as $key => $stage) {
            $has_stage = $job->hasStage($stage->id);
            if ($has_stage) {
                $stage->checked = 1;
                //Si tiene la stage
                if ($stage->id == $id) {
                    $job->stages()->detach($id);
                }
            }else{
                //No tiene la stage
                if ($stage->id == $id) {
                    $job->stages()->attach($id);
                }
            }
        }
    }
    // ['DRAFT', 'STRATEGY_REQUEST', 'STRATEGIC_IN_PROCESS', 'STRATEGIC_FINISHED', 'PUBLISHED', 'SUCCESSFUL_CLOSING', 'CLOSED_FAILED', 'CLOSED_TRUNCATED', 'CLOSED_FOR_PAUSE', 'CLOSED_DUE_TO_EXPIRATION']
    public function request_strategy(){
        $job = Job::find($this->id_job);
        $job->status = 'STRATEGY_REQUEST';
        $job->save();
        return redirect('/jobs');
    }
    public function save_draft(){
        $job = Job::find($this->id_job);
        $job->status = 'DRAFT';
        $job->save();
        return redirect('/jobs');
    }
    public function post_free_ad(){
        $job = Job::find($this->id_job);
        $job->status = 'PUBLISHED';
        $job->save();
        return redirect('/jobs');
    }
}