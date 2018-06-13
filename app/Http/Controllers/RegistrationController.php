<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }

    public function store()
    {
    	// validate
    	$this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

    	// create user
    	$user = User::create(request(['name','email','password']));

        // dd($user);

        //sign in user
        auth()->login($user);

    	return redirect()->home();
    }
}
