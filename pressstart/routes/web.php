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

Route::get('/item/create', function () {
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


/* Employee Routes */
Route::get('/employee', function () {
    return view('pages.employee.employee');
});

Route::get('/employee/view', function () {
    return view('pages.employee.employeeView');
});

Route::get('/employee/create', function () {
    return view('pages.employee.employeeCreate');
});



/* Pre-order Routes */
Route::get('/preorder', function () {
    return view('pages.preorder.preorder');
});

Route::get('/preorder/create', function () {
    return view('pages.preorder.preorderCreate');
});

Route::get('/preorder/view', function () {
    return view('pages.preorder.preorderView');
});


?>