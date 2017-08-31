<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Cart;

use App\Product;

use Session;

use App\ReachablePlaces;

class CartController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $user = Auth::user();

       if($user)
       {
         $mycarts = $user->carts;

         $customerdetail = Auth::user()->customers;

         return view('cart.index',compact('mycarts','customerdetail'));
       }

          return view('cart.guest');
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $product = Product::findOrFail($id);

        $mycart = Auth::user()->carts;

        $places = ReachablePlaces::all();

        return view('cart.create',compact('product','mycart','places'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $carts = new Cart;

        $carts->user_id = Auth::user()->id;
        $carts->product_id = $product->id;

        $get_place = $request->input('place');
        $get_quantity = $request->input('quantity');

        $product_cost = $product->cost;

         if($get_place=="Dar es salaam")
        {
            $totalcost = ($product_cost * $get_quantity) + 800;
            $carts->cost = $totalcost;
            $carts->quantity = $get_quantity;
            $carts->place = $get_place;
            $carts->save();
        }
        else
        {
            $totalcost = ($product_cost * $get_quantity) + 4750;
            $carts->cost = $totalcost;
            $carts->quantity = $get_quantity;
            $carts->place = $get_place;
            $carts->save();

        }

        return redirect('cart')->with('status','Product Added to Cart successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $mycart = Cart::findOrFail($id);

         return view('cart.show',compact('mycart'));
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
    public function destroy($id)
    {
        //get the Id of the Cart
       $cart = Cart::whereUserId(Auth::user()->id)->whereId($id)->first();

       $cart->delete();

       return redirect('cart')->with('status','Product successfully Removed');

    }
}
