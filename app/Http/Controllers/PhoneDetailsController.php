<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\PhoneDetails;

class PhoneDetailsController extends Controller
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
        
        $product = Product::findOrFail($id);

        $phonedetails = $product->phone_details;        

        return view('phonesdetails.index',compact('phonedetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
         $product = Product::findOrFail($id);

        return view('phonesdetails.create',compact('product'));
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
            'brand_name'=>'required','languages'=>'required','cellular'=>'required',
            'color'=>'required','rom'=>'required', 'releasedate'=>'required','size'=>'required',
            ]);
        $product = Product::findOrFail($id);
        $phonedetailsphonedetails = new PhoneDetails;
        $phonedetailsphonedetails->languages = $request->input('languages');
        $phonedetailsphonedetails->brand_name = $request->input('brand_name');
        $phonedetailsphonedetails->cellular = $request->input('cellular');
        $phonedetailsphonedetails->color = $request->input('color');
        $phonedetailsphonedetails->rom = $request->input('rom');
        $phonedetailsphonedetails->releasedate = $request->input('releasedate');
        $phonedetailsphonedetails->size = $request->input('size');
        $phonedetailsphonedetails->model = $request->input('model');
        $phonedetailsphonedetails->descriptions = $request->input('descriptions');
        $phonedetailsphonedetails->product_id = $product->id;

        $phonedetailsphonedetails->save();

        return redirect('products/'.$product->id.'/phonesdetails')->with('status','Specifications successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $phone_id)
    {
         $product = Product::findOrFail($id);

        $phonedetails = PhoneDetails::findOrFail($phone_id);

        return view('phonesdetails.show',compact('product','phonedetails'));
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

        $phonedetails = $product->phone_details;        

        return view('phonesdetails.edit',compact('phonedetails'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $phone_id)
    {
        $this->validate($request,[
            'brand_name'=>'required','languages'=>'required','cellular'=>'required',
            'color'=>'required','rom'=>'required', 'releasedate'=>'required','size'=>'required',
            ]);
        $product = Product::findOrFail($id);
        $phonedetails = PhoneDetails::findOrFail($phone_id);
        $phonedetailsphonedetails->languages = $request->input('languages');
        $phonedetailsphonedetails->brand_name = $request->input('brand_name');
        $phonedetailsphonedetails->cellular = $request->input('cellular');
        $phonedetailsphonedetails->color = $request->input('color');
        $phonedetailsphonedetails->rom = $request->input('rom');
        $phonedetailsphonedetails->releasedate = $request->input('releasedate');
        $phonedetailsphonedetails->size = $request->input('size');
        $phonedetailsphonedetails->model = $request->input('model');
        $phonedetailsphonedetails->descriptions = $request->input('descriptions');
        $phonedetailsphonedetails->product_id = $product->id;

        $phonedetails->save();

        return redirect('products/'.$product->id.'/phonesdetails')->with('status','Size successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phonedetails = PhoneDetails::findOrFail($phone_id);

        $phonedetails->delete();

        return redirect('products/'.$product->id.'/phonesdetails')->with('status','Size successfully Deleted');
    }
}
