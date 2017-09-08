<?php

namespace App\Http\Controllers;

use App\Product;

use App\Category;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)

    {
        $categories = Category::where('name', 'like', '%' . $request->input('q') . '%')->paginate(12);
        $products = Product::where('name', 'like', '%' . $request->input('q') . '%')->paginate(12);
        return view('products.index', compact('products','categories'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function autocomplete(Request $request)

    {
        $data = Product::select("name")->where("name", "LIKE", "%{$request->input('query')}%")->get();
        return response()->json($data);
    }
}
