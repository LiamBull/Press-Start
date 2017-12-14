<?php

namespace App\Http\Controllers;

use App\Ticket;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$tickets = DB::table('tickets')->get();

		return view('pages.ticket.ticket')->with('tickets', $tickets);
	}

	public function create()
	{
		return view('pages.ticket.ticketCreate');
	}

	public function store(Request $request)
	{
		$this->validate(request(), [
			'description' => 'required',
			'customerID' => 'required'
		]);

		$ticket = new Ticket;

		$ticket->description = $request->description;
		$ticket->customerID = $request->customerID;
		$ticket->status = 'Open';
		$ticket->dateSubmitted = Carbon::now();
		$ticket->comments = null;
		$ticket->userID = $request->user()->id;

		$ticket->save();

		return redirect('/ticket');
	}

	public function update(Request $request, $id)
	{
		$ticket = Ticket::find($id);

		$ticket->comments = $request->comments;
		$ticket->status = $request->status;

		$ticket->save();

		return redirect('/ticket');
	}

	public function view($id)
	{
		$ticket = DB::table('tickets')->where('id', $id)->first();

		return view('pages.ticket.ticketView', compact('ticket'));
	}
}
