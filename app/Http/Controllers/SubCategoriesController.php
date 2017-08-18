<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Subcategory;

use Session;



class SubCategoriesController extends Controller
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
        $category = Category::findOrFail($id);

        $subcat = $category->subcategories;

        return view('subcategories.index',compact('subcat','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
       
        $category = Category::findOrFail($id);

         return view('subcategories.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
         $category = Category::findOrFail($id);

        $subcat = new Subcategory;
       
        $subcat->category_id = $category->id;
        $subcat->name = $request->input('name');

        $subcat->save();

        return redirect('categories/'.$category->id)->with('message_flash','
            Subcategory successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$sub_id)
    {
       $cat = Category::findOrFail($id);
  
        $subcat = Subcategory::findOrFail($sub_id);
        
        $subcategory = $cat->subcategories()->where('category_id', $cat->id)->firstOrFail();

        return view('subcategories.show',compact('subcat','cat','subcategory'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcat = Subcategory::findOrFail($id);

        return view('subcategories.edit',compact('subcat'));
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
        ]);

        $category = Category::findOrFail($id);
        $subcat->category_id = $category->id;
        $subcat = Subcategory::findOrFail($id);
        $subcat->name = $request->input('name');
        $subcat->save();

        return redirect()->route('subcategories.show', 
            $subcat->id)->with('flash_message', 
            'Article, '. $subcat->title.' updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcat = Subcategory::findOrFail($id);
        $subcat->delete();

        return redirect()->route('subcategories.index')
            ->with('flash_message',
             'Article successfully deleted');
    }
}
