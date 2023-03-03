<?php

namespace App\Http\Livewire;

use App\Models\Country;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;
use Livewire\Component;

class ApplicantRegistrationComponent extends Component
{
    use WithFileUploads;

    public $name, $surnames, $birthdate, $ubication, $phone, $email, $password, $password_confirmation, $cv, $accept;
    public $country_code;
    public $countries;

    public function mount(){
        $this->countries = Country::all();
				//echo "hanntronico";
				//echo  $this->countries;
        $this->country_code = Country::first()->code;
    }
    public function render()
    {
        return view('livewire.applicant.registration')
        ->extends('layouts.app')
				->section('content');
    }
    public function Register(){
        $this->validate([
            'name' => 'required|max:255',
            'surnames' => 'required|max:255',
            'birthdate' => 'required|date',
            'ubication' => 'required|max:255',
            'phone' => 'required|size:9',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'cv' => 'required|max:15048|mimes:docx,doc,pdf',
            'accept' => 'required',
            'country_code'=> 'required|not_in:choose'
        ]);
        // 'password_confirmation' => 'required',
        $customFileName = uniqid(). '_.' . $this->cv->extension();
        $this->cv->storeAs('public/cv/', $customFileName);

        $profile = Profile::create([
            'name' => $this->name,
            'surnames' => $this->surnames,
            'birthdate' => $this->birthdate,
            'ubication' => $this->ubication,
            'phone' => $this->phone,
            'cv' => $customFileName,
        ]);
        $user = User::create([
            'profile_id' => $profile->id,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        $user->assignRole('postulant');

        $this->guard()->login($user);
        return redirect()->route('dashboard');
    }
    public function guard()
    {
        return Auth::guard();
    }
}
