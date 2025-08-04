<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class Register extends Component
{
    public $name='';
    public $email='';
    public $password='';
    
    public function register(){
        //validate
        $validate = $this->validate([
            'name'=> ['required'],
            'email' => ['email'], 
            'password' => [Password::min(6)]
            ]
        );

        //create 
        $user = User::create( [
            'name'=> $validate['name'],
            'email'=> $validate['email'],
            'password' => $validate['password']
            ]
        );

        //login user
        Auth::login($user);

        //redirect
        return redirect('/policy');
    }
    public function render()
    {
        return view('livewire.register');
    }
}
