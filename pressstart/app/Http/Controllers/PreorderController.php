<?php

namespace App\Http\Controllers;

use App\Preorder;
use App\Item;
use App\Customer;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PreorderController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$preorders = DB::table('preorders')->get();
		$customers = DB::table('customers')->get();

		return view('pages.preorder.preorder')->with('preorders', $preorders, 'customers', $customers);
	}

	public function create()
	{
		return view('pages.preorder.preorderCreate');
	}

	public function store(Request $request)
	{
		$this->validate(request(), [
			'itemName' => 'required',
			'customerEmail' => 'required'
		]);

		$itemName = $request->itemName;
		$itemID = Item::where('itemName', $itemName)->value('id');

		$customerEmail = $request->customerEmail;
		$customerID = Customer::where('email', $customerEmail)->value('id');

		$preorder = new Preorder;

		$preorder->itemID = $itemID;
		$preorder->customerID = $customerID;
		$preorder->dateCreated = Carbon::now();
		$preorder->userID = $request->user()->id;

		$preorder->save();

		return redirect('/preorder');
	}

	public function view($id)
	{
		$preorder = DB::table('preorders')->where('id', $id)->first();

		return view('pages.preorder.preorderView', compact('preorder'));
	}
}
