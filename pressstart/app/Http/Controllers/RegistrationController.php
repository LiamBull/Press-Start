<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function create()
    {
    	return view('pages.register');
    }

    public function store()
    {
    	// Form Validation

    	$this->validate(request(), [
    		'username' => 'required',
    		'fullname' => 'required',
    		'type' => 'required',
    		'SIN' => 'required',
    		'email' => 'required|email',
    		'phonenumber' => 'required',
    		'address' => 'required',
    		'password' => 'required|confirmed'
    	]);

        $user = User::create([
            'username' => request('username'),
            'fullname' => request('fullname'),
            'type' => request('type'),
            'SIN' => request('SIN'),
            'email' => request('email'),
            'phonenumber' => request('phonenumber'),
            'address' => request('address'),
            'password' => bcrypt(request('password'))
        ]);

    	return redirect('/employee');
    }
}
