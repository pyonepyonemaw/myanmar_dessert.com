<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('backends.products.index',['products'=>$products]);
    }

    public function create(){
        return view('backends.products.create');
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required',
            'price'=>'required',
        ]);
        $file = $request->file('image');
        $fileName = rand().$file->getClientOriginalName();
        $file->move(public_path('assets/products'),$fileName);
        Product::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$fileName,
            'price'=>$request->price,
        ]);

        return redirect()->back()->with('status',"Product Created Successfully!");
    }

    public function edit($id){
        $product = Product::find($id);
        return view('backends.products.edit',['product'=>$product]);
    }

    public function update(Request $request,$id){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required',
            'price'=>'required',
        ]);
        $file = $request->file('image');
        $fileName = rand().$file->getClientOriginalName();
        $file->move(public_path('assets/products'),$fileName);
        Product::find($id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$fileName,
            'price'=>$request->price,
        ]);

        return redirect()->back()->with('status',"Product Updated Successfully!");
    }

    public function delete($id){
        Product::destroy($id);
        return redirect()->back()->with('status',"Product Deleted Successfully!");
    }
}
