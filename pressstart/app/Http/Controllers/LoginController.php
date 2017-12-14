<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function __construct()
	{
		//$this->middleware('guest', ['except' => 'destroy']);
	}

	public function create()
	{
		return view('pages.login');
	}

	public function store()
	{
		if (auth()->attempt(request(['username', 'password'])))
		{
			return redirect('/');
		} 
		else 
		{
			return back();
		}		
	}

	public function destroy()
	{
		auth()->logout();

		return redirect('/login');
	}
}
