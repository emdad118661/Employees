<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\employeeOrderListController;
 use App\Http\Controllers\orderDetailsController;
 use App\Http\Controllers\employeeCustomerController;
 use App\Http\Controllers\employeeProductController;


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

Route::get('/', function () {
    return view('employess/employeeIndex');
});
Route::get('/employeeOrderList',[employeeOrderListController::class,'showOrderList']);

Route::get('/customerDetails',[employeeCustomerController::class,'details']);

Route::get('employeeProductList', [employeeProductController::class, 'showProduct'])->name('employess.employeeProductList');

Route::get('employeeProductEdit/{PID?}', [employeeProductController::class, 'edit'])->name('employess.employeeProductEdit');
Route::post('/employeeProductEdit/edit', [employeeProductController::class, 'editSubmit'])->name('edit.submit');
Route::get('employess/employeesOrderDetails/{id}',[employeeCustomerController::class,'orderDetails'])->name('employees.OrderDetails');

