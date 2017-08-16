<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Dimension;
use Auth;
use Session;
use App\Category;
use App\Subcategory;

class ProductController extends Controller
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
    public function index()
    {
        $products = Product::orderby('id','desc')->paginate('5');
        $category = Category::all();

        return view('products.index',compact('products','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $dimensions = Dimension::all();
        $subcategory = Subcategory::all();
        
         return view('products.create',compact('category','dimensions','subcategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required|max:100',
            'cost'=>'required',
            'manufacturer'=>'required',
            ]);

        $title = $request['title'];
        $body = $request['body'];
        $manufacturer = $request['manufacturer'];
        $category = $request['category'];
        $size = $request['size'];
        $cost = $request['cost'];
        $subcategory = $request['subcategory'];

        $product = Product::create($request
            ->only('title', 'body','manufacturer','category','subcategory','size','cost'));

    //Display a successful message upon save
        return redirect()->route('products.index')
            ->with('flash_message', 'Article,
             '. $product->title.' created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $product = Product::findOrFail($id); //Find product of id = $id

        return view ('products.show', compact('product'));
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

        return view('products.edit', compact('product'));
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
            'title'=>'required|max:100',
            'body'=>'required',
        ]);

        $product = Product::findOrFail($id);
        $product->title = $request->input('title');
        $product->body = $request->input('body');
        $product->save();

        return redirect()->route('products.show', 
            $product->id)->with('flash_message', 
            'Product, '. $product->title.' updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')
            ->with('flash_message',
             'Product successfully deleted');
    }
}
