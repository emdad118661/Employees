@extends('layouts.emplyoeeApp')
@section('content')
<h1 class="text-center">Product</h1>
<table class="table table-info table-striped">
        <thead>
            <tr>
                <th scope="col">Product Id</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price($)</th>
                <th scope="col">Catagory Id</th>
                <th scope="col">Stock</th>
                <th scope="col">Discount</th>
                <th scope="col">Description</th>
                <th scope="col">Picture</th>
                <th scope="col">Rating</th>
                <th scope="col">Review</th>
                <th scope="col">Showroom</th>
                <th scope="col">Manager Id</th>
                <th scope="col">Sold Pieces</th>
            </tr>
        </thead>
            @foreach($products as $product)
        <tbody>
            <tr>
                <th scope="row">{{$product->PID}}</th>
                <td>{{$product->PNAME}}</td>
                <td>{{$product->PBPRICE}}</td>
                <td>{{$product->PCATEGORYID}}</td>
                <td>{{$product->PSTOCK}}</td>
                <td>{{$product->PDISCOUNT}}</td>
                <td>{{$product->PDESCRIPTION}}</td>
                <td>{{$product->PPICTURE}}</td>
                <td>{{$product->RATING}}</td>
                <td>{{$product->REVIEW}}</td>
                <td>{{$product->PSHOP}}</td>
                <td>{{$product->MID}}</td>
                <td>{{$product->PSOLDQUANTITY}}</td>
                <td><a href='employeeProductEdit/{{ $product->PID }}' class="btn btn-success">Edit</a></td>
                <td><a href='delete/{{ $product->PID }}' class="btn btn-danger">Delete</a></td>
            </tr>
        </tbody>
            @endforeach
    </table>

@endsection