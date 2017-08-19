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
    public function index($id,$sub_id)
    {
       $category = Category::findOrFail($id);
  
        $subcat = Subcategory::findOrFail($sub_id);

        $products = Product::all();
        
        $subcategory = $category->subcategories()->where('category_id', $category->id)->firstOrFail();

       // $products = $subcat->products()->where('category_id',$category->id)->where('subcategory_id',$subcat->id)->firstOrFail();

        return view('products.index',compact('subcat','category','subcategory','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, $sub_id)
    {
       $category = Category::findOrFail($id);
  
        $subcategory = Subcategory::findOrFail($sub_id);
        
        $subcategory = $category->subcategories()->where('category_id', $category->id)->firstOrFail();

        return view('products.create',compact('category','subcategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id, $sub_id)
    {
        $this->validate($request, [
            'name'=>'required|max:100',
            'cost'=>'required',
            'manufacturer'=>'required',
            ]);

        //category id
        $cat = Category::findOrFail($id);

        //subcategory
        $subcat = Subcategory::findOrFail($sub_id);

        //subcategory's id
        $subcategory = $cat->subcategories()->where('category_id', $cat->id)->firstOrFail();

        $product = new Product;
        $product->name = $request->input('name');
        $product->body = $request->input('body');
        $product->manufacturer = $request->input('manufacturer');
        $product->subcategory_id = $subcat->id;
        $product->category_id = $cat->id;
        $product->cost = $request->input('cost');

        $product->save();


    //Display a successful message upon save
        return redirect('categories/'.$cat->id.'/subcategories/'.$subcat->id.'/products')
            ->with('flash_message', 'Article,
             '. $product->name.' created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$sub_id,$prod_id)
    {
        
       $category = Category::findOrFail($id);
  
        $subcat = Subcategory::findOrFail($sub_id);

        $prod = Product::findOrFail($prod_id);
        
        $subcategory = $category->subcategories()->where('category_id', $category->id)->firstOrFail();

        $product = $subcat->products()->where('subcategory_id', $subcat->id)->firstOrFail();

        return view('products.show',compact('subcat','category','subcategory','product'));
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
            'name'=>'required|max:100',
            'body'=>'required',
        ]);

        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->body = $request->input('body');
        $product->save();

        return redirect()->route('products.show', 
            $product->id)->with('flash_message', 
            'Product, '. $product->name.' updated');
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
