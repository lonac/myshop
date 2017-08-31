<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ReachablePlaces;

use Session;

class ReachablePlacesController extends Controller
{
     public function __construct()
    {
        $this->middleware(['auth','product'])->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $place = ReachablePlaces::all();

        return view('reachableplaces.index',compact('place'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reachableplaces.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'name'=>'required|max:50',
            ]);

        $place = new ReachablePlaces;
        $place->name = $request->input('name');

        $place->save();

        return redirect('reachableplaces')->with('status','
            Place successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $place = ReachablePlaces::findOrFail($id);

         return view('reachableplaces.show',compact('place'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $place = ReachablePlaces::findOrFail($id);

        return view('reachableplaces.edit',compact('place'));
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

        $place = ReachablePlaces::findOrFail($id);
        $place->name = $request->input('name');
        $place->save();

        return redirect('reachableplaces')->with('status','Place successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $place = ReachablePlaces::findOrFail($id);
        $place->delete();

        return redirect('reachableplaces')
            ->with('status',
             'Place successfully Deleted');
    }
}
