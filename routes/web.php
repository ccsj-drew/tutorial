<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', "PagesController@home");
Route::get('/', function () {
  return view('welcome');

});
Route::resource('customers', "CustomersController");
//Route::get('customers/{id}', function ($id) {
      //return 'customers'.$id;
//Route::get('customers/{id}', function ($id) {
    //return 'customers '.$id;
//Route::any('/', function () {
    //
//});
//Route::resource('edit', "EditController");

//Route::any('customers', function () {
//Route::resource('customers/edit', "CustomersController");

// Route::get('/customers', function () {
  // return view('customers.index');
//  });
Route::resource('reservations', 'ReservationsController');
Route::get('/reservations', "ReservationsController@index");
Route::get('/reservations/create/{customer_id}', "ReservationsController@create_reservation");
Route::post('/reservations/{customer_id}', "ReservationsController@store");



//Route::get('/customers', 'CustomersController@index');
//Route::post('/customers', 'CustomersController@Create');
//Route::get('/customers/{customer}' , 'CustomersController@show');
//Route::post('/customers', 'CustomersController@store');
//Route::get('/customers{customer/edit}', 'CustomersController@edit');
//Route::patch('/customers{customer}', 'CustomersController@update');
//Route::delete('/customers{customer}', 'CustomersController@destroy');
//return view('customers.index');


//});
// //Route::get('/customers', function () {
// //return view('customers')}
//
// Route::get('/customers/create', function () {
// return view('create')}
