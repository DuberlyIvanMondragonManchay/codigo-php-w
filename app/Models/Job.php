<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
        'third_party_name',
        'hide_company_name',
        'recruiting_another_company',
        'workday',
        'type_of_contract',
        'working_modality',
        'seniority',
        'minimum_level_of_education',
        'education_status',
        'job_hierarchy',
        'district_id',
        'category_id',
        'user_id',
        'company_id',
        'minimum_salary',
        'maximum_salary',
        'currency',
        'exact_salary',
        'show_exact_salary',
        'Company_description',
        'job_description',
        'detail_requirements',
        'detail_benefits',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function specializations(){
        return $this->belongsToMany(Specialization::class);
    }
    public function hasSpecialty($id){
        $specializations_id = $this->specializations->pluck('id')->toArray();
        return in_array($id, $specializations_id);
    }
    public function benefits(){
        return $this->belongsToMany(Benefit::class);
    }
    public function hasBenefit($id){
        $benefits_id = $this->benefits->pluck('id')->toArray();
        return in_array($id, $benefits_id);
    }
    public function stages(){
        return $this->belongsToMany(Stage::class);
    }
    public function hasStage($id){
        $stages_id = $this->stages->pluck('id')->toArray();
        return in_array($id, $stages_id);
    }
}
