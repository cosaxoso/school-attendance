<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use Illuminate\Validation\Rules\Password;
class RegisteredUserController extends Controller
{
    public function index(){
        return view('auth.register');
    }
    public $name='';
    public $email='';
    public $password='';
    
    public function register(){
        $validate = request()->validate([
            'name'=> ['required'],
            'email' => ['email'], 
            'password' => [Password::min(6)]
            ]
        );
        // if($validate->fails()){
        //     return redirect()->back()->withErrors($validate)->withInput();
        // }
        $user = User::create($validate);

        //login user
        Auth::login($user);

        //redirect
        return redirect('/policy');
    }
    
}
