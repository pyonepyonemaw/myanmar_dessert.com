@extends('master.master')

@section('content')

<div class="containter m-auto p-5 text-center">
<div class="row text-center">
    <div class="col-md-4"></div>

    <div class="col-md-4">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Congratulation!</h5>
    
    <p class="card-text">Your Order Confirmed! Please wait 15 minute!</p>
    <a href="/" class="card-link btn btn-outline-dark">Home</a>
    <a href="{{route('products.detail')}}" class="card-link btn btn-outline-dark">Continue Shopping!</a>
  </div>
</div>
    </div>

    <div class="col-md-4"></div>
</div>
</div>

@endsection