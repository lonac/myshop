<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ReachablePlaces;

use Session;

class ReachablePlacesController extends Controller
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
        $place = new ReachablePlaces;
        $place->name = $request->input('name');

        $place->save();

        return redirect()->route('reachableplaces.index')->with('message_flash','
            ReachablePlaces successfully added');
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

        return redirect('reachableplaces.show', 
            $place->id)->with('flash_message', 
            'Article, '. $place->name.' updated');
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

        return redirect()->route('reachableplaces.index')
            ->with('flash_message',
             'Article successfully deleted');
    }
}
