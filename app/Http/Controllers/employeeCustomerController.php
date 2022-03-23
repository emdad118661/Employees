<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class employeeCustomerController extends Controller
{
    //
    function details(){
        return Customer::find(1);
    }
}
