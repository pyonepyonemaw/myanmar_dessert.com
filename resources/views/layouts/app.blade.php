<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="sidebar-mini" style="height: auto;" cz-shortcut-listen="true">
<div class="wrapper">

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="index3.html" class="nav-link">Home</a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="#" class="nav-link">Contact</a>
</li>
</ul>

<ul class="navbar-nav ml-auto">
<li class="nav-item dropdown">
    @if(Auth::check())
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endif

</ul>
</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="index3.html" class="brand-link">
<span class="brand-text font-weight-light">Myanmar Dessert
</a>

<div class="sidebar">

<nav class="mt-5">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

<li class="nav-item menu-open">
<a href="#" class="nav-link active">
<i class="fa-solid fa-users-line"></i>
<p>
User Management
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="{{route('users.create')}}" class="nav-link">
<i class="fa-solid fa-user-plus"></i>
<p>User Register</p>
</a>
</li>
<li class="nav-item">
<a href="{{route('users.index')}}" class="nav-link">
<i class="fa-solid fa-users-between-lines"></i>
<p>User List</p>
</a>
</li>
</ul>

<li class="nav-item menu-open">
<a href="#" class="nav-link active">
<i class="fa-solid fa-bowl-rice"></i>
<p>
Product Management
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="/product" class="nav-link">
<i class="fa-solid fa-circle-plus"></i>
<p>Add Product</p>
</a>
</li>
<li class="nav-item">
<a href="/products" class="nav-link">
<i class="fa-solid fa-bars-staggered"></i>
<p>Product List</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="{{route('user.order')}}" class="nav-link">
<i class="fa-solid fa-cart-arrow-down"></i>
<p>
Order List
</p>
</a>
</li>

<li class="nav-item">
<a href="/user/{{auth()->id()}}/edit" class="nav-link">
<i class="fa-solid fa-user-gear"></i>
<p>
Edit Profile
</p>
</a>
</li>

</ul>
</nav>
</div>
</aside>

<div class="content-wrapper" style="min-height: 223.667px;">


<div class="content">
<div class="container-fluid">
   @yield('content')
</div>
</div>

</div>

</aside>

<aside class="control-sidebar control-sidebar-dark" style="display: none;">

<div class="p-3">
<h5>Title</h5>
<p>Sidebar content</p>
</div>
</aside>


<footer class="main-footer">

<div class="float-right d-none d-sm-inline">
Anything you want
</div>

<strong>Copyright © 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>
<div id="sidebar-overlay"></div></div>





<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" ></script>
<script>
    $(document).ready( function () {
    $('#table').DataTable();
} );
</script>

</body>
</html>
