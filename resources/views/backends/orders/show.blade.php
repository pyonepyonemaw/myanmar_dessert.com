@extends('master.master')
 
@section('content')
<div class="container p-5">
<h2 class="text-center"><i class="fa-solid fa-cart-plus"></i> Order</h2>
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
     
    </tr>
  </thead>
  <tbody>
      @php $no=1; $total=0; @endphp
  @foreach($orders as $order)
  @php $total += $order['qty'] * $order['price']; @endphp
    <tr>
       
      <th scope="row">{{$no}}</th>
      <td><img src='{{asset("assets/products/$order[image]")}}' width="100" height="100" alt=""></td>
      <td>{{$order['title']}}</td>
      <td>{{$order['qty']}}</td>
      <td>{{$order['price']}} MMK</td>
      <td>{{$order['qty'] * $order['price']}} MMK</td>
     
    
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
<form class="p-5" action="{{route('user.order')}}" method="get" enctype="multipart/form-data">
@if($errors->any())
    @foreach($errors->all() as $err)
        <div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
    {{$err}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endforeach
    @endif

  <h2 class="text-center">Customer's Information</h2>
        @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="{{$customer->name}}" disabled>
    </div>
    <div class="mb-3">
        <label for="phone_number" class="form-label">Phone Number</label>
        <input type="number" name="phone_number" class="form-control" id="phone_number" value="{{$customer->phone_number}}" disabled>
    </div>
    <div class="mb-3">
        <label for="table_number" class="form-label">Table Number</label>
        <input type="number" name="table_number" class="form-control" id="table_number" value="{{$customer->table_number}}" disabled>
    </div>
    
    <div class="text-center">
    <button type="submit" class="btn btn-outline-dark"><i class="fa-solid fa-hand-point-left"></i> Back</button>
    </div>
    </form>
</div>
@endsection