<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class employeeCustomerController extends Controller
{
    //
    public function details(){
        $customers = Customer::all();
        return view('employess.employeeCustomerDetails')
        ->with('customers', $customers);
     }
}
