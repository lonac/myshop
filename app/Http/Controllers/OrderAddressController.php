<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\ShippingAddress;

use App\ProductOrder;

use App\Cart;


class OrderAddressController extends Controller
{
     public function __construct() {
        $this->middleware(['auth', 'isAdmin']); 
    }

    public function show($id)
    {

    	$order = ProductOrder::findOrFail($id);

        //get the cart id
        $cart = $order->cart_id;

        $address = ShippingAddress::findOrFail($cart);

         return view('orders.show',compact('order','address'));
    }


}
