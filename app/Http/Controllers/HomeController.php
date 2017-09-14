<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Cart;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        $user = Auth::user();

       if($user)
       {
         $mycarts = $user->carts;

         return view('home',compact('mycarts','categories'));
       }

         return view('home',compact('categories'));
    }
}
