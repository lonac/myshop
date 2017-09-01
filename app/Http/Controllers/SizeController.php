<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Product;

use App\Size;

class SizeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','product']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $sizes = Size::all();

        $product = Product::findOrFail($id);

        return view('sizes.index',compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $product = Product::findOrFail($id);

        return view('sizes.create',compact('product'));
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
            'size'=>'required',
            ]);
        $product = Product::findOrFail($id);
        $size = new Size;
        $size->size = $request->input('size');
        $size->product_id = $product->id;

        $size->save();

        return redirect('products/'.$product->id.'/sizes/create')->with('status','Size successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $size_id)
    {
        $product = Product::findOrFail($id);

        $size = Size::findOrFail($size_id);

        return view('sizes.show',compact('product','size'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $size_id)
    {
        $product = Product::findOrFail($id);
        $size = Size::findOrFail($size_id);

        return view('sizes.edit',compact('product','size'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $size_id)
    {
        $this->validate($request,[
            'size'=>'required',
            ]);
        $product = Product::findOrFail($id);
        $size = Size::findOrFail($size_id);
        $size->size = $request->input('size');
        $size->product_id = $product->id;

        $size->save();

        return redirect('products/'.$product->id.'/sizes')->with('status','Size successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($size_id)
    {

        $size = Size::findOrFail($size_id);

        $size->delete();

        return redirect('products/'.$product->id.'/sizes')->with('status','Size successfully Deleted');


    }
}
