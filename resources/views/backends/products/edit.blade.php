@extends('layouts.app')

@section('content')

<div class="container p-5">
    <h2 class="text-center"><i class="fa-solid fa-circle-plus"></i> Edit Product</h2>
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
    <form class="p-5" action="{{route('products.update',$product->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="text-center">
            <img src='{{asset("assets/products/$product->image")}}' width="100" height="100" alt="">
        </div>
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="title" value="{{$product->title}}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" class="form-control">{{$product->description}}</textarea>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" name="price" class="form-control" id="price"value="{{$product->price}}">
    </div>
    <div class="input-group mb-3">
    <input type="file" class="form-control" id="inputGroupFile02" name="image">
    <label class="input-group-text" for="inputGroupFile02">Upload New Photo</label>
    </div>
    <button type="submit" class="btn btn-outline-dark"><i class="fa-solid fa-circle-check"></i> Update</button>
    </form>
</div>
@endsection