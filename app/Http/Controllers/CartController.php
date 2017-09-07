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

         $myship = Auth::user()->shipping_addresses;

         return view('cart.index',compact('mycarts','myship'));
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

        $sizes = $product->sizes()->where('product_id',$product->id)->get();

        $clothsize = $product->clothes_sizes()->where('product_id',$product->id)->get();

        return view('cart.create',compact('product','mycart','sizes','clothsize'));
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
        $carts->size = $request->input('size');

        $get_quantity = $request->input('quantity');



        $product_cost = $product->cost;
        $carts->cost = $product_cost;
        $carts->quantity = $get_quantity;
        $carts->save();


        return redirect('cart/'.$carts->id.'/shippingaddress/create')->with('status','Your Order has been Placed');

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

        //get the user_id from Cart

        $user_id = $mycart->user_id;

        //get the aunthenticated user id

        $auth_user_id = Auth::user()->id;

        //compare the id's

        if($user_id==$auth_user_id)
        {
           return view('cart.show',compact('mycart'));
        }
        else
        {
           return redirect('/products');
        }

         
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

       $cart = Auth::user()->carts->id->first();

       $cart->delete();

       return redirect('cart')->with('status','Product successfully Removed');

    }
}
