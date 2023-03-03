<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\Country;
use App\Models\Department;
use App\Models\Profile;
use App\Models\Province;
use App\Models\User;
use App\Rules\RUCExists;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class CompanyRegistrationComponent extends Component
{
    public $ruc, $business_name, $sector, $size, $phone, $address, $website, $description, $name, $surnames, $position, $email, $password, $accept, $company_administrator_role;

    public $country, $department, $province, $district_id;
    public $data_country, $data_department, $data_province, $data_district;
    public $country_code;


    public $minimum_salary, $maximum_salary, $exact_salary, $show_exact_salary, $Company_description, $job_description;



    public function mount(){
        $this->data_country = Country::all();
        $this->data_department = [];
        $this->data_province = [];
        $this->data_district = [];

        $this->country_code = 00;
        $this->country = 'choose';
        $this->department = 'choose';
        $this->province = 'choose';
        $this->district_id = 'choose';
    }

    public function render()
    {
        return view('livewire.company.registration')
        ->extends('layouts.app')
        ->section('content');

        // return view('livewire.company.registration')->extends('layouts.app');
    }

    public function get_departments(){
        $tem_country = Country::find($this->country);
        $this->country_code = $tem_country->code;
        $this->data_department = $tem_country->departments;

        $this->data_province = [];
        $this->data_district = [];

        $this->department = 'choose';
        $this->province = 'choose';
        $this->district_id = 'choose';
    }
    public function get_provinces(){
        $tem_departments = Department::find($this->department);
        $this->data_province = $tem_departments->provinces;

        $this->data_district = [];

        $this->province = 'choose';
        $this->district_id = 'choose';
    }
    public function get_district(){
        $tem_province = Province::find($this->province);
        $this->data_district = $tem_province->districts;

        $this->district_id = 'choose';
    }
    public function Register(){
        $data = $this->search_company();
        $this->validate([
            'ruc' =>
            [
                'required',
                'unique:companies',
                'size:11',
                new RUCExists($data)
            ],

            'business_name' =>'required|min:3',
            'sector' =>'required|min:3',
            'size' =>'required',
            'phone' =>'required|size:9',
            'address' =>'required|min:5',
            'website' =>'required|url',
            'description' =>'required|min:5',
            'name' =>'required',
            'surnames' =>'required',
            'position' =>'required',
            'email' =>'required|email|unique:users',
            'password' =>'required|string|min:8',
            'accept' =>'required',

            'country' =>'required|not_in:choose',
            'department' =>'required|not_in:choose',
            'province' =>'required|not_in:choose',
            'district_id' =>'required|not_in:choose',
            'country_code' =>'required',
        ]);
        $profile = Profile::create([
            'name' => $this->name,
            'surnames' => $this->surnames,
            'position' => $this->position,
        ]);
        $company = Company::create([
            'ruc' => $this->ruc,
            'business_name' => $this->business_name,
            'sector' => $this->sector,
            'size' => $this->size,
            'phone' => $this->country_code.$this->phone,
            'address' => $this->address,
            'website' => $this->website,
            'description' => $this->description,
            'district_id' => $this->district_id,
        ]);
        $user = User::create([
            'profile_id' => $profile->id,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'company_id' => $company->id
        ]);
        $user->assignRole('company_administrator');
        $this->guard()->login($user);

        return redirect()->route('dashboard');
    }
    public function guard()
    {
        return Auth::guard();
    }
    public function get_company_data()
    {
        // Hacer que no cargue cada vez que se haga un cambio
        if (strlen($this->ruc) == 11) {

            $data = $this->search_company();
            // La razón social y todos los datos solo se obtienen del api
            if (isset($data['success'])) {
                $this->business_name = '';
                $this->emit('ruc-error', 'El número de RUC no existe.');
            } else {
                $this->business_name = $data['razonSocial'];
            }
        }else{
            // Mandar mensaje de error – el número de RUC tiene que tener 11 caracteres
            $this->emit('ruc-error', 'El RUC no cuenta con los caracteres necesarios.');
        }
    }
    public function search_company(){
        $base_url = config('services.apisperu.base_url');
        $token = config('services.apisperu.token');

        $response = Http::get($base_url.$this->ruc.'?token='.$token);
        $data = json_decode($response->body(), true);


        
        return $data;
    }
}
