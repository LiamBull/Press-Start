<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
	public function index()
	{
        $employees = DB::table('users')->paginate(15);

        return view('pages.employee.employee', ['employees' => $employees]);
	}

	public function view($id)
	{
		$employee = DB::table('users')->where('id', $id)->first();

		return view('pages.employee.employeeView', compact('employee'));
	}

	public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'userName' => 'required',
            'fullName' => 'required',
            'type' => 'required',
            'SIN' => 'required|regex:/[0-9]{9}/',
            'email' => 'required|email',
            'phoneNumber' => 'required|regex:/[0-9]{10}/',
            'address' => 'required'
        ]);

        if (User::where('email', '=', $request->email)->exists())
        {
            return back()->withErrors(['Employee with this email already exists.']);
        }
        elseif (User::where('phonenumber', '=', $request->phonenumber)->exists())
        {
            return back()->withErrors(['Employee with this phone number already exists.']);
        }
        elseif (User::where('SIN', '=', $request->SIN)->exists())
        {
            return back()->withErrors(['Employee with this SIN already exists.']);  
        }
        elseif (User::where('userName', '=', $request->userName)->exists())
        {
            return back()->withErrors(['Employee with this username already exists.']);
        }
        elseif (User::where('fullName', '=', $request->userName)->exists())
        {
            return back()->withErrors(['Employee with this name already exists.']);
        }
        else
        {
            $employee = User::find($id);

            $employee->userName = $request->userName;
            $employee->fullName = $request->fullName;
            $employee->type = $request->type;
            $employee->SIN = $request->SIN;
            $employee->email = $request->email;
            $employee->phoneNumber = $request->phoneNumber;
            $employee->address = $request->address;

            $employee->save();

            return redirect('/employee');
        }
    }

	public function delete($id)
	{
		$employee = User::find($id);

		$employee->delete();

		return redirect('/employee');
	}

    public function search(Request $request)
    {
        $keyword = $request->search;

        $employees = null;

        $employees = User::SearchByKeyword($keyword)->paginate(15);

        return view('pages.employee.employee', ['employees' => $employees]);
    }
}
