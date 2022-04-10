@extends('master.master')

@section('title',"Home Page")

@section('content')
<!-- Start Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">Myanmar Dessert</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="/">HOME</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#product">PRODUCT</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#contact">CONTACT US</a>
        </li>

        <li class="nav-item">
        <a class="nav-link active text-white" aria-current="page" href="{{route('carts.index')}}"><i class="fa-solid fa-cart-plus"></i>
      <span class="badge rounded-pill bg-light text-dark">
        @if(session()->has('count'))
      {{session()->get('count')}}
        @else
        0
      @endif</span></a>
        
        </li>
      </ul>
      
    </div>
  </div>
</nav>
<!-- End Navbar -->







<!-- Start Product -->
<section id="product">
  <div class="container p-5">
    <h2 class="text-center about m-3" data-aos="flip-right">OUR PRODUCTS</h2>
    <div class="row"> 
      @foreach($products as $product)
      <div class="col-md-4 my-3">
        <!-- Start Card -->
          <div class="card" style="width: 18rem;" data-aos="flip-right">
          <img src='{{asset("assets/products/$product->image")}}'  height="250" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center about">{{$product->title}}</h5>
            <p class="card-text about text-center">{{$product->description}}</p>
              <p class="text-center about">Price: {{$product->price}} MMK <i class="fa-solid fa-cart-shopping"></i>
             
             </p>
           <p class="text-center">
           <a href="{{route('carts.create',$product->id)}}" class="btn btn-outline-danger"><i class="fa-solid fa-cart-plus"></i> Add To Cart</a>
           </p>
          </div>
        </div>
    <!-- End Card -->
      </div>
      @endforeach
      
    </div>
    {{$products->links()}}
  </div>
</section>
<!-- End Product -->

<!-- Start contact -->
<section id="contact">
  <div class="container-fluid contact-us">
    <div class="row m-4">
      <div class="col-md-6" data-aos="slide-up">
        <h2 class="text-white m-4">CONTACT US</h2>
        <p class="text-white m-4" > <i class="fa-solid fa-location-dot"></i> No:9831, ShwePyiTar Township,Yangon, Myanmar</p>
        <p class="text-white m-4" > <i class="fa-solid fa-mobile-screen"></i> +959224439872</p>
        <p class="text-white m-4" > <i class="fa-solid fa-envelopes-bulk"></i> myanmar_dessert@gmail.com</p>
        <p class="text-white m-4"> Follow Us</p>
        <p class="text-white m-4"><i class="fa-brands fa-facebook-square media"></i> 
        <i class="fa-brands fa-instagram media"></i> <i class="fa-brands fa-twitter media"></i> 
        <i class="fa-brands fa-skype media"></i> <i class="fa-brands fa-viber media"></i> 
        <i class="fa-brands fa-telegram media"></i>
      </p>
      </div>
      <div class="col-md-6" data-aos="slide-up">
      <h2 class="text-white text-center m-4">OUR LOCATION</h2>
      <p class="text-center m-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122110.05352577804!2d96.00532442725547!3d16.97754208276862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c197da5b09df63%3A0x3560b1bd1e76df58!2z4YCb4YC94YC-4YCx4YCV4YC84YCK4YC64YCe4YCsIOGAmeGAvOGAreGAr-GAt-GAlOGAmuGAuiwg4YCb4YCU4YC64YCA4YCv4YCU4YC6!5e0!3m2!1smy!2smm!4v1649140768454!5m2!1smy!2smm" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
      </div>
      
    </div>
    <hr class="text-white" >
  <p class="text-center text-white footer" data-aos="slide-up-left" > Product & Design By Myanmar Dessert</p>
  </div>

  
</section>
<!-- End contact -->



@endsection