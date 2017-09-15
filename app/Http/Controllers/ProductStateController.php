<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\ProductState;

class ProductStateController extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'isAdmin']); 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $product = Product::findOrFail($id);

        return view('productstate.create',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $this->validate($request,[
            'state'=>'required',
            ]);
        $product = Product::findOrFail($id);

        $state = new ProductState;
        $state->product_id = $product->id;

        $get_state = $request->input('state');

        if($get_state=="select")
        {
            return view('productstate.create',compact('product'))->with('message','Please select the State Product State');
        }
        else
        {
            $state = $get_state;
            $state->save();

            return redirect('products/'.$product->id)->with('message','State Successfully Added');

        }
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
         $product = Product::findOrFail($id);

          return view('productstate.edit',compact('product'));
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
      
       $this->validate($request,[
            'state'=>'required',
            ]);
        $product = Product::findOrFail($id);

        $state_id  = $product->product_states->id;

        $state = ProductState::findOrFail($state_id);
        $state->product_id = $product->id;

        $get_state = $request->input('state');

        if($get_state=="select")
        {
            return view('productstate.edit',compact('product'))
                ->with('status','Please select the State Product State');
        }
        else
        {
            $state->state = $get_state;

            $state->save();

            return redirect('products/'.$product->id)->with('message','State Successfully Updated');

        }

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
}
