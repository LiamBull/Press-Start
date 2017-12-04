<?php

/*
	All of these routes are temporary and intended for 
	demonstration purposes. Moving forward, all function
	will be handled by controllers.
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/login', function () {
    return view('pages.login');
});

/* Item Routes */
Route::get('/item', function () {
    return view('pages.item.item');
});

Route::get('/item/view', function () {
    return view('pages.item.itemView');
});

Route::get('/item/view', function () {
    return view('pages.item.itemCreate');
});

/* Ticket Routes */
Route::get('/ticket', function () {
    return view('pages.ticket.ticket');
});

Route::get('/ticket/view', function () {
    return view('pages.ticket.ticketView');
});

Route::get('/ticket/create', function () {
    return view('pages.ticket.ticketCreate');
});

/* Customer Routes */
Route::get('/customer', function () {
    return view('pages.customer.customer');
});

Route::get('/customer/view', function () {
    return view('pages.customer.customerView');
});

Route::get('/customer/create', function () {
    return view('pages.customer.customerCreate');
});

?>