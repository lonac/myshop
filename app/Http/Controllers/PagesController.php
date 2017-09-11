<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Category;

use App\Subcategory;

use App\ProductsPhoto;

class PagesController extends Controller
{
 
    public function index()
    {

         $categories = Category::all();

         $subcategories = Subcategory::all();

         $products =Product::all();

      return view('welcome',compact('categories','subcategories','products'));  
    }

    public function about()
    {
    	 $products = Product::orderby('id','desc')->paginate('8');       

         $categories = Category::all();

      return view('about',compact('products','categories'));
    }

    public function contacts()
    {
    	 $products = Product::orderby('id','desc')->paginate('8');       

         $categories = Category::all();

      return view('contacts',compact('products','categories'));
    }

    public function help()
    {
    	 $products = Product::orderby('id','desc')->paginate('8');       

         $categories = Category::all();

      return view('help',compact('products','categories')); 
    }
}
