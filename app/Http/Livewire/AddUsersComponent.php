<?php

namespace App\Http\Livewire;

use App\Models\Company;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithPagination;

class AddUsersComponent extends Component
{
    public $email;
    public $role;
    use WithPagination;
    public $pagination = 10;
    public $search;

    public function mount(){
        $this->role = 'choose';
    }
    public function render()
    {
        if (strlen($this->search) > 0) {
            $users = User::where('email', 'like', '%' . $this->search . '%')->where('company_id', auth()->user()->company_id)->paginate($this->pagination);
        }else {
            $users = User::where('company_id', auth()->user()->company_id)->paginate($this->pagination);
        }
        
        return view('livewire.users.add', [
            'users' => $users,
        ])
        ->extends('layouts.app')
        ->section('content');
    }
    public function add_user(){

        $this->validate([
            'email' => 'required|email|unique:users'
        ]);

        $company = Company::find(auth()->user()->company_id);

        $user = User::create([
            'email' => $this->email,
            'password' => Hash::make($this->generateRandomString()),
            'company_id' => $company->id
        ]);
        $user->assignRole('employee');

        $expiresAt = now()->addDay();
        $user->sendWelcomeNotification($expiresAt);
        // Hacer un emit para mostrar un mensaje 
        
        $this->emit('invitation_sent', 'invitation_sent');

        $this->reset_inputs();

    }
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function reset_inputs(){
        $this->role = 'choose';
        $this->email = null;
    }
}
