<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UserSessionController
{
    public function index(){
        return view('auth.login');
    }


    public function login(){
        //validate
        $attributes = request()-> validate([
            'email'=> ['required', 'email'],
            'password'=> ['required']
        ]);

        //attempt to log user in 
        if (!Auth::attempt($attributes)){
            throw ValidationException::withMessages(['email'=> 'Sorry, those credentials do not match']);
        };
        
        //regenerate the session token
        request()-> session()-> regenerate();

        //return to diff page
        return redirect('/dashboard');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
