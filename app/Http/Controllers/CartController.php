<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Cart;

use App\Product;

use Session;

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

        return view('cart.create',compact('product','mycart'));
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

        $carts->save();

        return view('carts.index')
            ->with('status', 'Product added
              to cart');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         $mycarts = Auth::user()->carts;

         return view('cart.show',compact('mycarts'));
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
       $cart = Cart::findOrFail($id);

       $carts->delete();

       return view('carts.index')->with('status','Product successfully Removed');

    }
}
