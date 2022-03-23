<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;

class employeeCustomerController extends Controller
{
    //
    public function details(){
        $customers = Customer::all();
        return view('employess.employeeCustomerDetails')
        ->with('customers', $customers);
     }
     public function orderDetails(Request $req){
            $customer = Customer::where('id',decrypt($req->id))->first();
            return view('employess.employeesOrderDetails');
     }
}
