<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Category;

class PagesController extends Controller
{
 
    public function index()
    {
        $products = Product::all();
        $category = Category::all();

      return view('welcome',compact('products','category'));  
    }

    public function about()
    {
    	return view('about');
    }

    public function contacts()
    {
    	return view('contacts');
    }

    public function help()
    {
    	return view('help');
    }
}
