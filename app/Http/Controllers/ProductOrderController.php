<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cart;

use App\ProductOrder;

use App\Product;

use Auth;

use App\PaymentMode;

class ProductOrderController extends Controller
{
     public function __construct()
    {
        $this->middleware(['auth','clearance'])->except('index','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $cart = Cart::findOrFail($id);

        $user = Auth::user();

        $order = $cart->product_orders()->where('user_id',$user->id)->get();

        return view('orders.index',compact('order','cart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $cart = Cart::findOrFail($id);

         $paymentmodes = PaymentMode::all();

        return view('orders.create',compact('cart','paymentmodes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->validate($request,[
            'company'=>'required',
            'reference'=>'required|max:100',
            ]);

        $cart = Cart::findOrFail($id);
        $order = new ProductOrder;
        $order->cart_id = $cart->id;
        $order->user_id = Auth::user()->id;
        $order->company = $request->input('company');
        $order->reference = $request->input('reference');

        $order->save();

        return redirect('cart/'.$cart->id.'/orders')->with('status','You Order has been placed with ID= KKOO'.$order->id);

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
    public function destroy($id)
    {
        //
    }

    public function kkoo()
    {
        $kkoo_orders = ProductOrder::all();

        return view('orders.kkoo',compact('kkoo_orders'));
    }

    public function payments($id)
    {
        $cart = Cart::findOrFail($id);
        return view('orders.payments',compact('cart'));
    }
}
