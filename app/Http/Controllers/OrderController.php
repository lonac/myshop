<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;

use Auth;

use App\Product;

use App\PaymentMode;

class OrderController extends Controller
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
    public function index()
    {

         $myorders = Auth::user()->orders;

        return view('orders.index',compact('myorders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paymentmodes = PaymentMode::all();

        $customer = Auth::user()->customers;
        
        $carts = Auth::user()->carts;

        return view('orders.create',compact('paymentmodes','customer','carts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'company'=>'required',
            'reference'=>'required|max:100',
            ]);

        $orders = new Order;
        $orders->user_id = Auth::user()->id;
        $orders->company = $request->input('company');
        $orders->reference = $request->input('reference');

        $orders->save();

        return redirect('orders')->with('status','Your Order was successfully place with ID NO-');
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
        $kkoo_orders = Order::all();

        return view('orders.kkoo',compact('kkoo_orders'));
    }
}
