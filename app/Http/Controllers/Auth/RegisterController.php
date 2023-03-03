<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Profile;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    public function redirectTo() {
        if (auth()->user()->hasRole('postulant')) {
            return route('postulant.dashboard');
        } else {
            // company_administrator_role
            return route('postulant.dashboard');
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if ($data['role'] == 'applicant_role') {
            $validation = Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'surnames' => ['required', 'string', 'max:255'],
                'birthdate' => ['required', 'date'],
                'ubication' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'max:15'],
                'cv' => ['required', 'max:15048', 'mimes:docx,doc,pdf'],
    
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
    
                'accept' => ['required'],
            ]);
        } else if ($data['role'] == 'company_administrator_role') {
            $validation = Validator::make($data, [
                
                'ruc' => ['required', 'max:11'],
                'business_name' => ['required', 'max:255'],
                'sector' => ['required', 'max:255'],
                'size' => ['required', 'max:255'],
                'phone' => ['required', 'max:13'],
                'country' => ['required', 'max:100'],
                'province' => ['required', 'max:100'],
                'city' => ['required', 'max:100'],
                'address' => ['required', 'max:255'],
                'website' => ['required', 'max:255'],
                'description' => ['required'],
                'name' => ['required', 'string', 'max:255'],
                'surnames' => ['required', 'string', 'max:255'],
                'position' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8'],

                'accept' => ['required'],
            ]);
        }
        return $validation;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if ($data['role'] == 'applicant_role') {
            $customFileName = uniqid(). '_.' . $data['cv']->extension();
            $data['cv']->storeAs('public/cv/', $customFileName);
            $profile = Profile::create([
                'name' => $data['name'],
                'surnames' => $data['surnames'],
                'birthdate' => $data['birthdate'],
                'ubication' => $data['ubication'],
                'phone' => $data['phone'],
                'cv' => $customFileName,
            ]);
            $user = User::create([
                'profile_id' => $profile->id,
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
            $user->assignRole('postulant');
        } else if ($data['role'] == 'company_administrator_role') {
            $profile = Profile::create([
                'name' => $data['name'],
                'surnames' => $data['surnames'],
                'position' => $data['position'],
            ]);
            $company = Company::create([
                'ruc' => $data['ruc'],
                'business_name' => $data['business_name'],
                'sector' => $data['sector'],
                'size' => $data['size'],
                'phone' => $data['phone'],
                'address' => $data['address'],
                'website' => $data['website'],
                'description' => $data['description'],
                'district_id' => $data['district_id'],
            ]);
            $user = User::create([
                'profile_id' => $profile->id,
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'company_id' => $company->id
            ]);
            $user->assignRole('company_administrator');
        }
        return $user;
    }
}
