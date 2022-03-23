@extends('layouts.emplyoeeApp')

@section('content')
    <h1>This is edit student page!</h1>
    @if($errors->any())
    @foreach($errors->all() as $e)
        <span>{{$e}}</span>
    @endforeach
    @endif
    <form action="{{route('edit.submit')}}", method="post">
            {{@csrf_field()}}
            <input type="hidden" name="PID" value="{{encrypt($product->PID)}}">
            <input type="text" placeholder="Name" name="PNAME" value="{{$product->PNAME}}" id="">
            @error('PNAME')
            <span>{{$message}}</span>
            @enderror
            <br>
            <input type="text" placeholder="Username" name="PSTOCK" value="{{$product->PSTOCK}}" id="">
            @error('PSTOCK')
            <span>{{$message}}</span>
            @enderror
            <br>
            <input type="text" placeholder="ID" name="PDISCOUNT" value="{{$product->PDISCOUNT}}" id="">
            @error('PDISCOUNT')
            <span>{{$message}}</span>
            @enderror
            <br>
            <input type="text" placeholder="CGPA" name="PSOLDQUANTITY" value="{{$product->PSOLDQUANTITY}}" id="">
            @error('PSOLDQUANTITY')
            <span>{{$message}}</span>
            @enderror
            <!-- <br>
            <input type="text" placeholder="DOB" name="dob" value="{{$product->dob}}" id="">
            @error('dob')
            <span>{{$message}}</span> -->
            <!-- @enderror -->
            <br>
            <input type="submit" value="UPDATE">
        </form>
@endsection