<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ShippingAddress;

use App\Cart;

use Auth;

class ShippingAddressController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $cart = Cart::findOrFail($id);

        $myship = $cart->shipping_addresses;

        //get the user_id from Cart

        $user_id = $cart->user_id;

        //get the aunthenticated user

        $auth_user_id = Auth::user()->id;

        //compare the id

        if($user_id==$auth_user_id)
        {
           return view('shippingaddress.index',compact('myship','cart')); 
        }
        else
        {
           return redirect('/products');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $cart = Cart::findOrFail($id);

        $user_id = $cart->user_id;
        $auth_user_id = Auth::user()->id;
        if($user_id==$auth_user_id)
        {
           return view('shippingaddress.create',compact('cart'));
        }
        else
        {
           return redirect('/products');
        }

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
         $this->validate($request, [
            'firstname'=>'required|max:20',
            'lastname'=>'required|max:20',
            'region'=>'required|max:30',
            'address'=>'required|max:100',
            'phonenumber1'=>'required|max:15',
            'phonenumber2'=>'required|max:15',

            ]);
        $cart = Cart::findOrFail($id);
        
        $shippindetails = new ShippingAddress;
        $shippindetails->firstname = $request->input('firstname');
        $shippindetails->middlename = $request->input('middlename');
        $shippindetails->lastname = $request->input('lastname');
        $shippindetails->region = $request->input('region');
        $shippindetails->address = $request->input('address');
        $shippindetails->phonenumber1 = $request->input('phonenumber1');
        $shippindetails->phonenumber2 = $request->input('phonenumber2');
        $shippindetails->cart_id = $cart->id;
      //  $shippindetails->user_id = Auth::user()->id;


        $shippindetails->save();

        return redirect('cart/'.$cart->id.'/orders/payments')->with('status','Shipping Address Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cart = Cart::findOrFail($id);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cart = Cart::findOrFail($id);

        $myship = $cart->shipping_addresses;

        $user_id = $cart->user_id;
        $auth_user_id = Auth::user()->id;
        if($user_id==$auth_user_id)
        {
           return view('shippingaddress.edit',compact('myship','cart'));
        }
        else
        {
           return redirect('/products');
        }



        
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
         $this->validate($request, [
            'firstname'=>'required|max:20',
            'lastname'=>'required|max:20',
            'region'=>'required|max:30',
            'address'=>'required|max:100',
            'phonenumber1'=>'required|max:15',
            'phonenumber2'=>'required|max:15',

            ]);
        $cart = Cart::findOrFail($id);

        $shipping_id = $cart->shipping_addresses->id;
        
        $shippindetails = ShippingAddress::findOrFail($shipping_id);
        $shippindetails->firstname = $request->input('firstname');
        $shippindetails->middlename = $request->input('middlename');
        $shippindetails->lastname = $request->input('lastname');
        $shippindetails->region = $request->input('region');
        $shippindetails->address = $request->input('address');
        $shippindetails->phonenumber1 = $request->input('phonenumber1');
        $shippindetails->Phonenumber2 = $request->input('Phonenumber2');
        $shippindetails->cart_id = $cart->id;

        $shippindetails->save();

        return redirect('cart')->with('status','Details successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
     $cart = Cart::findOrFail($id);

        $shipping_id = $cart->shipping_addresses->id;

        $shipping_id->destroy();

        return redirect('cart/'.$cart->id.'/shippingaddress')->with('status','Details successfully DELETED');

    }
}
