@extends('layouts.app')

@section('content')

<div class="container p-5">
    <h2 class="text-center"><i class="fa-solid fa-user-plus"></i> User Register</h2>
    @if($errors->any())
    @foreach($errors->all() as $err)
        <div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
    {{$err}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endforeach
    @endif

    @if(Session::has('status'))
    <div class="alert alert-success alert-dismissible fade show my-3" role="alert">
    {{Session::get('status')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <form class="p-5" action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="********">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control" id="password" placeholder="********">
    </div>
    <div class="input-group mb-3">
    <input type="file" class="form-control" id="inputGroupFile02" name="profile">
    <label class="input-group-text" for="inputGroupFile02">Upload New Photo</label>
    </div>
    <button type="submit" class="btn btn-outline-dark"><i class="fa-solid fa-circle-check"></i> Save</button>
    </form>
</div>
@endsection