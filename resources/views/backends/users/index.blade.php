@extends('layouts.app')
 
@section('content')
<div class="container p-5">
<h2 class="text-center"><i class="fa-solid fa-bars-staggered"></i> User List</h2>
@if(Session::has('status'))
<div class="alert alert-success alert-dismissible fade show my-5" role="alert">
  {{Session::get('status')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<table class="table table-dark table-striped p-5 my-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @php $no=1; @endphp
  @foreach($users as $user)
    <tr>
       
      <th scope="row">{{$no}}</th>
      <td>{{$user->name}}</td>
      <td><img src='{{asset("assets/profile/$user->profile")}}' width="50" height="50" alt=""></td>
      <td><a href="{{route('users.show',$user->id)}}" class="btn btn-outline-light"><i class="fa-solid fa-eye"></i></a>
      <a href="{{route('users.delete',$user->id)}}" class="btn btn-outline-light"><i class="fa-solid fa-trash-can"></i></a>
      <td>
    
    </tr>
    @php $no++; @endphp
    @endforeach
  </tbody>
</table>
</div>
@endsection