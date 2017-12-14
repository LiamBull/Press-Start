<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $customers = DB::table('customers')->get();

        return view('pages.customer.customer')->with('customers', $customers);
    }

    public function view($id)
    {
        $customer = DB::table('customers')->where('id', $id)->first();

        return view('pages.customer.customerView', compact('customer'));
    }

    public function create() 
    {
        return view('pages.customer.customerCreate');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'phoneNumber' => 'required',
            'email' => 'required|email'
        ]);

        $customer = new Customer;

        $customer->firstName = $request->firstName;
        $customer->lastName = $request->lastName;
        $customer->phoneNumber = $request->phoneNumber;
        $customer->email = $request->email;

        $customer->save();

        return redirect('/customer');
    }

    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'phoneNumber' => 'required',
            'email' => 'required|email'
        ]);

        $customer = Customer::find($id);

        $customer->firstName = $request->firstName;
        $customer->lastName = $request->lastName;
        $customer->phoneNumber = $request->phoneNumber;
        $customer->email = $request->email;

        $customer->save();

        return redirect('/customer');
    }

    public function delete($id)
    {
        $customer = Customer::find($id);

        $customer->delete();

        return redirect('/customer');
    }
}
