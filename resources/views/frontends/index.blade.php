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
          <a class="nav-link active text-white" aria-current="page" href="#about">ABOUT</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active text-white" aria-current="page" href="#service">SERVICE</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active text-white" aria-current="page" href="#product">PRODUCT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#contact">CONTACT US</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
<!-- End Navbar -->

<!-- Start slide -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('assets/images/about.jpg')}}" height="350" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/images/slide4.webp')}}" height="350" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('assets/images/slide3.jpg')}}" height="350" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- End slide -->

<!-- Start About -->
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-6 p-5 text-center " data-aos="fade-up-right">
          <img src="{{asset('assets/images/about.jpg')}}" width="350" height="250" alt="">
      </div>
      <div class="col-md-6 p-5 about" data-aos="fade-up-left">
            <h2 class="px-3">ABOUT US</h2>
            <p class="p-3">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
             Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
             galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
              but also the leap into electronic typesetting, remaining essentially unchanged. 
            </p>
      </div>
    </div>
  </div>
</section>
<!-- End About -->

<!-- Start photo -->
<section class="photo">
<div class="container p-4">
  <div class="row">
    <div class="col-md-2" data-aos="fade-up-left">
    <img src="{{asset('assets/images/food20.webp')}}" width="100" height="100" class="img-circle " alt="...">
    </div>
    <div class="col-md-2" data-aos="fade-up-left">
    <img src="{{asset('assets/images/food11.jpg')}}" width="100" height="100" class=" img-circle " alt="...">
    </div>
    <div class="col-md-2" data-aos="fade-up-left">
    <img src="{{asset('assets/images/food21.jpg')}}" width="100" height="100" class=" img-circle " alt="...">
    </div>
    <div class="col-md-2" data-aos="fade-up-right">
    <img src="{{asset('assets/images/food2.jpg')}}" width="100" height="100" class=" img-circle " alt="...">
    </div>
    <div class="col-md-2" data-aos="fade-up-right">
    <img src="{{asset('assets/images/food8.JPG')}}" width="100" height="100" class=" img-circle " alt="...">
    </div>
    <div class="col-md-2" data-aos="fade-up-right">
    <img src="{{asset('assets/images/food4.gif')}}" width="100" height="100" class=" img-circle " alt="...">
    </div>
    
  </div>

</section>
<!-- End Photo -->

<!-- Start service -->
<section id="service">
  <div class="container">
    <div class="row p-5 ">
      <h2 class="text-center p-4 about" data-aos="zoom-in">OUR SERVICES</h2>
      <div class="col-md-6 p-5 text-center" data-aos="zoom-in">
        <img src="{{asset('assets/images/service1.png')}}"  width="200" height="200" alt="">
      </div>
      <div class="col-md-6 p-5" data-aos="zoom-in">
        <h3 class="text-center about">WAITER</h3>
        <p class="text-center about">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
          when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
      </div>
    <hr class="line">

    <div class="col-md-6 p-5 text-center" data-aos="zoom-out">
    <h3 class="text-center about">MUSIC</h3>
        <p class="text-center about">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
          when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
      </div>
      <div class="col-md-6 p-5"data-aos="zoom-out">
      <img src="{{asset('assets/images/music.webp')}}"  width="200" height="200" alt=""> 
      </div>   
    <hr class="line">

    <div class="col-md-6 p-5 text-center" data-aos="zoom-in">
    <img src="{{asset('assets/images/cooking.jpg')}}"  width="200" height="200" alt=""> 
      </div>
      <div class="col-md-6 p-5" data-aos="zoom-in">
      <h3 class="text-center about">COOKING</h3>
        <p class="text-center about">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
          when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
      </div>   
    <hr class="line">

    <div class="col-md-6 p-5 text-center" data-aos="zoom-out">
    <h3 class="text-center about">FOOD DECORATION</h3>
        <p class="text-center about">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
          when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
      </div>
      <div class="col-md-6 p-5" data-aos="zoom-out">
      <img src="{{asset('assets/images/food-decoration.png')}}"  width="200" height="200" alt=""> 
      </div>   
    <hr class="line">

    <div class="col-md-6 p-5 text-center" data-aos="zoom-in">
    <img src="{{asset('assets/images/taste.webp')}}"  width="200" height="200" alt=""> 
      </div>
      <div class="col-md-6 p-5" data-aos="zoom-in">
      <h3 class="text-center about">CONSUMAR SATISFY</h3>
        <p class="text-center about">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
          when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
      </div>   
    <hr class="line">


</div>
  </div>
</section>
<!-- End Service -->

<!-- Start Product -->
<section id="product">
  <div class="container">
    <h2 class="text-center about" data-aos="flip-right">OUR PRODUCTS</h2>
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
              <span class="badge rounded-pill bg-danger">0</span>
             </p>
           <p class="text-center">
           <a href="{{route('products.detail')}}" class="btn btn-outline-danger">View More</a>
           </p>
          </div>
        </div>
    <!-- End Card -->
      </div>
      @endforeach
      
    </div>
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