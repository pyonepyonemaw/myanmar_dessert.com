<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Session::get('carts');
        //return $carts;
        return view('frontends.cart',['carts'=>$carts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $product = Product::find($id);
        if(Session::exists('carts')){
            $cart = Session::get('carts');
            $cart[$id]= [
                'title'=>$product->title,
                'description'=>$product->description,
                'price'=>$product->price,
                'image'=>$product->image,
                'qty'=>1,
            ];
            Session::put('carts',$cart);
        }else{
            Session::put('carts',[
                $id=>[
                    'title'=>$product->title,
                    'description'=>$product->description,
                    'price'=>$product->price,
                    'image'=>$product->image,
                    'qty'=>1,
                ]
            ]);
        }
        $count = count(Session::get('carts'));
        //return $count;
        Session::put('count',$count);
        return redirect()->back();
        //return Session::get('carts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($key)
    {
        $cart = Session::get('carts');
        unset($cart[$key]);
        Session::put('carts',$cart);
        return redirect()->back();
    }

    public function add($key){
        $cart = Session::get('carts');
        $cart[$key]['qty']++;
        Session::put('carts',$cart);
        return redirect()->back();
    }

    public function subtract($key){
        $cart = Session::get('carts');
        if($cart[$key]['qty'] != 1 )
        {
            $cart[$key]['qty']--;
        }
        
        Session::put('carts',$cart);
        return redirect()->back();
    }

    public function checkOut(Request $request){
        $request->validate([
            'name'=>'required',
            'phone_number'=>'required',
            'table_number'=>'required',
        ]);
        $customer = Customer::create([
            'name'=>$request->name,
            'phone_number'=>$request->phone_number,
            'table_number'=>$request->table_number,
        ]);

        $carts = Session::get('carts');
        foreach($carts as $cart){
            Order::create([
                'image'=>$cart['image'],
                'title'=>$cart['title'],
                'qty'=>$cart['qty'],
                'price'=>$cart['price'],
                'customer_id'=>$customer->id,
            ]);
        }
        Session::forget('carts');
        return redirect('/message');
    }

    public function message(){
       return view('frontends.message');
    }
}
