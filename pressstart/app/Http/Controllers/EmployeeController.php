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
		$employees = DB::table('users')->get();

		return view('pages.employee.employee')->with('employees', $employees);
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
            'SIN' => 'required|numeric|size:9',
            'email' => 'required|email',
            'phoneNumber' => 'required|numeric|size:10',
            'address' => 'required'
        ]);

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

	public function delete($id)
	{
		$employee = User::find($id);

		$employee->delete();

		return redirect('/employee');
	}
}
