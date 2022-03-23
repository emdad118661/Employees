<?php

 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
//  use DB;
// use App\Http\Requests;
// use App\Http\Controllers\Controller;
use App\Models\Product;

 class employeeProductController extends Controller
 {

     public function showProduct(){
        // $products = DB::select('select * from products');
        // return view('employess.employeeProductList',['products'=>$products]);
        $products = Product::all();
        return view('employess.employeeProductList')
        ->with('products', $products);
     }
     public function edit(Request $req){
        $product = Product::where('PID', '=', decrypt($req->PID))
        ->select('PID', 'PNAME', 'PSTOCK', 'PDISCOUNT', 'PSOLDQUANTITY')
        ->first();
        return view('employess.employeeProductEdit')
        ->with('product', $product);
//         //  $products = Product::find($PID);
//         //  return view('employess.employeeProductEdit');
//        //  $products = Product::find($PID);
//        //  return view('employess.employeeProductEdit', compact('products'));
//        $PSTOCK = $request->input('PSTOCK');
//    $PDISCOUNT = $request->input('PDISCOUNT');
//    $PSOLDQUANTITY = $request->input('PSOLDQUANTITY');
//    $PBPRICE = $request->input('PBPRICE');
// /*$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);*/
// /*DB::table('student')->update($data);*/
// /* DB::table('student')->whereIn('id', $id)->update($request->all());*/
// DB::update('update student set PSTOCK = ?,PDISCOUNT=?,PSOLDQUANTITY=?,PBPRICE=? where PID = ?',[$PSTOCK,$PDISCOUNT,$PSOLDQUANTITY,$PBPRICE,$PID]);
// echo "Record updated successfully.
// ";
// echo 'Click Here to go back.';
}
     public function editSubmit(Request $req) {
        $this->validate($req,
        [
            'PID'   => 'required',
            'PNAME' => 'required',
            'PSTOCK' => 'required',
            'PDISCOUNT' => 'required',
            'PSOLDQUANTITY' => 'required'
        ]
    );
    //end of validation
    $pr = Student::where('PID', '=', decrypt($req->PID))->first();
    // var_dump($st);
    $pr->PNAME = $req->PNAME;
    $pr->PSTOCK = $req->PSTOCK;
    $pr->PDISCOUNT = $req->PDISCOUNT;
    $pr->PSOLDQUANTITY = $req->PSOLDQUANTITY;
    // $pr->dob = $req->dob;
    $pr->save();
    return "<h1>form updated!</h1>";
        }
    //  public function deleteProduct($PID){
    //      $productData = Product::find($PID);
    //      $productData->delete();
    //      return redirect('employess.employeeProductList');
    //  }
 }
