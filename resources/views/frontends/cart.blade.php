@extends('master.master')
 
@section('content')
<div class="container p-5">
<h2 class="text-center"><i class="fa-solid fa-cart-plus"></i> Your Carts</h2>
@if(Session::has('status'))
<div class="alert alert-success alert-dismissible fade show my-5" role="alert">
  {{Session::get('status')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<table class="table table-dark table-striped m-3" id="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Qty</th>
      <th scope="col">Price</th>
      <th scope="col">Amount</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @php $no=1; $total=0; @endphp
  @foreach($carts as $key=>$cart)
  @php $total += $cart['qty'] * $cart['price']; @endphp
    <tr>
       
      <th scope="row">{{$no}}</th>
      <td><img src='{{asset("assets/products/$cart[image]")}}' width="100" height="100" alt=""></td>
      <td>{{$cart['title']}}</td>
      <td>{{$cart['qty']}}</td>
      <td>{{$cart['price']}} MMK</td>
      <td>{{$cart['qty'] * $cart['price']}} MMK</td>
      <td>
        <a href="{{route('cart.add',$key)}}" class="btn btn-outline-light"><i class="fa-solid fa-circle-plus"></i></a>
        <a href="{{route('cart.subtract',$key)}}" class="btn btn-outline-light"><i class="fa-solid fa-circle-minus"></i></a>
        <a href="{{route('cart.delete',$key)}}" class="btn btn-outline-light"><i class="fa-solid fa-trash-can"></i></a>
      </td>
    
    </tr>
    @php $no++; @endphp
    @endforeach
  </tbody>
  <tfoot>
    <tr>
      <td colspan="5">Total</td>
      <td colspan="2">{{$total}} MMK</td>
    </tr>
  </tfoot>
</table>
</div>


<div class="container">
<form class="p-5" action="{{route('cart.checkout')}}" method="post" enctype="multipart/form-data">
@if($errors->any())
    @foreach($errors->all() as $err)
        <div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
    {{$err}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endforeach
    @endif

  <h2 class="text-center">Fill User Information</h2>
        @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
    </div>
    <div class="mb-3">
        <label for="phone_number" class="form-label">Phone Number</label>
        <input type="number" name="phone_number" class="form-control" id="phone_number" placeholder="Enter Phone Number">
    </div>
    <div class="mb-3">
        <label for="table_number" class="form-label">Table Number</label>
        <input type="number" name="table_number" class="form-control" id="table_number" placeholder="Enter Table Number">
    </div>
    
    <div class="text-center">
    <button type="submit" class="btn btn-outline-dark"><i class="fa-solid fa-circle-check"></i> Check Out</button>
    </div>
    </form>
</div>
@endsection