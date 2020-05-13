<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;


class CustomersController extends Controller
{

  public function index()
  {
    // dd('hello');
    $customers = Customer::all();

     return view ('customers.index', ['customers' => $customers]);
  }



  public function create()
  {

    //dd('hello');
    return view ('customers.create');
  }



  public function store()
  {
    // dd('inside store');

    Customer::create(request(['first_name','last_name']));
    return redirect('/customers');
  }




  public function show(Post $id)
  {
      //
      $customer->find($id);

      return view('posts.show', compact('post'));
  }




 public function edit($id)
 {
   $customer = Customer::find($id);
   return view('customers.edit', compact('customer'));
 }

 public function update($id)
 {
   $customer = Customer::find($id);
   //dd('hello');
   $customer->first_name = request('first_name');
   $customer->last_name = request('last_name');

   $customer->save();

   return redirect('/customers');
 }

 public function destroy($id)
 {
   $customer = Customer::find($id);
   //dd('hello');
   $customer = Customer::find($id);
   customer::find($id)->delete($id);



   /// issue is possible here////
   return redirect('/customers');
 }
}
