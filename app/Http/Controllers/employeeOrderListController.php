<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class employeeOrderListController extends Controller
{
    //
    function showOrderList(){
        $orderData = Order::all();
        return view('employess.employeeOrderList',['orders'=>$orderData]);
    }
}
