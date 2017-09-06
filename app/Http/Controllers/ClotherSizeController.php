<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\ClothesSize;


class ClotherSizeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','product'])->except('index','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $sizes = ClothesSize::all();

        $product = Product::findOrFail($id);

        return view('clothsizes.index',compact('sizes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $product = Product::findOrFail($id);

        return view('clothsizes.create',compact('product'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request ,$id)
    {
        $this->validate($request,[
            'size'=>'required',
            ]);
        $product = Product::findOrFail($id);
        $size = new ClothesSize;
        $size->size = $request->input('size');
        $size->product_id = $product->id;

        $size->save();

        return redirect('products/'.$product->id.'/clothsizes/create')->with('status','SizClothesSizee successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        $size = ClothesSize::findOrFail($size_id);

        return view('clothsizes.show',compact('product','size'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$size_id)
    {
        $product = Product::findOrFail($id);
        $size = ClothesSize::findOrFail($size_id);

        return view('clothsizes.edit',compact('product','size'));
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
        $size = ClothesSize::findOrFail($size_id);
        $size->size = $request->input('size');
        $size->product_id = $product->id;

        $size->save();

        return redirect('products/'.$product->id.'/clothsizes')->with('status','Size successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($size_id)
    {
        $size = ClothesSize::findOrFail($size_id);

        $size->delete();

        return redirect('products/'.$product->id.'/clothsizes')->with('status','Size successfully Deleted');
    }
}
