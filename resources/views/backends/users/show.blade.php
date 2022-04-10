@extends('layouts.app')

@section('content')
<div class="container m-5">
    <h2 class="text-center my-4">User Profile</h2>
    <div class="text-center">
        <img src='{{asset("assets/profile/$user->profile")}}' width="100" height="100" alt="">
    </div>

    <form class="p-5" >
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="{{$user->name}}" disabled>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email" value="{{$user->email}}" disabled>
    </div>
    
    </form>
</div>
@endsection