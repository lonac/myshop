<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProductRequest;

use App\Product;
use App\Dimension;
use Auth;
use Session;
use App\Category;
use App\Subcategory;
use App\ReachablePlaces;
use App\ProductsPhoto;
use App\PaymentMode;


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

        $productpictures =ProductsPhoto::all();

       $products = Product::orderby('id','desc')->paginate('8');

        return view('products.index',compact('products','productpictures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('products.create',compact('categories','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {

        $product = new Product(array(
      'name' => $request->get('name'),
      'manufacturer' => $request->get('manufacturer'),
      'categoryname' => $request->get('categoryname'),
      'subcategoryname' => $request->get('subcategoryname'),
      'cost' => $request->get('cost'),
      'body' => $request->get('body')
    ));

    $product->save();

   $imageName = $product->name; 

    $request->file('image')->move(
        base_path() . '/public/images/catalog/', $imageName
    );

    //Display a successful message upon save
        return redirect()->route('products.index')
            ->with('status', 'Product,
             '. $product->name.' created');
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

        $places = ReachablePlaces::all();
        

        $paymentmodes = PaymentMode::all();

        $productpictures = $product->products_photos()->where('product_id',$product->id)->get();

        return view('products.show',compact('product','places','productpictures','paymentmodes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $categories = Category::all();
        
        $subcategories = Subcategory::all();

        $product = Product::findOrFail($id); //Find product of id = $id

        return view ('products.edit', compact('product','categories','subcategories'));
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
            'manufacturer'=>'required',
            'categoryname'=>'required',
            'subcategoryname'=>'required',
            'cost'=>'required',
        ]);

        $product = Product::findOrFail($id);
        $name = $request['name'];
        $manufacturer = $request['manufacturer'];
        $categoryname = $request['categoryname'];
        $subcategoryname = $request['subcategoryname'];
        $cost = $request['cost'];
        $body = $request['body'];

        $product = Product::create($request->only('name', 'cost','body','manufacturer','categoryname','subcategoryname'));


        return redirect()->route('products.show', 
            $product->id)->with('flash_message', 
            'Article, '. $product->title.' updated');
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
