<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PaymentMode;

class PaymentModeController extends Controller
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
        $paymentmodes = PaymentMode::all();

        return view('paymentmodes.index',compact('paymentmodes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paymentmodes.create');
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

            'companyname'=>'required|max:100',
            'accountname'=>'required|max:100',
            'accountnumber'=>'required|max:10',

            ]);
        $paymentmodes = new PaymentMode;
        $paymentmodes->companyname = $request->input('companyname');
        $paymentmodes->accountname = $request->input('accountname');
        $paymentmodes->accountnumber = $request->input('accountnumber');
        
        $paymentmodes->save();

        return redirect()->route('paymentmodes.index')->with('message_flash','
            PaymentMode successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paymentmodes = PaymentMode::findOrFail($id);

        return view('paymentmodes.show',compact('paymentmodes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paymentmodes = PaymentMode::findOrFail($id);

        return view('paymentmodes.edit',compact('paymentmodes'));
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
            'companyname'=>'required|max:100',
        ]);

        $paymentmodes = PaymentMode::findOrFail($id);
        $paymentmodes->companyname = $request->input('companyname');
        $paymentmodes->accountname = $request->input('accountname');
        $paymentmodes->accountnumber = $request->input('accountnumber');
        $paymentmodes->save();

        return redirect('paymentmodes.show', 
            $paymentmodes->id)->with('flash_message', 
            'Article, '. $paymentmodes->title.' updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paymentmodes = PaymentMode::findOrFail($id);
        $paymentmodes->delete();

        return redirect()->route('paymentmodes.index')
            ->with('flash_message',
             'Article successfully deleted');
    }
}
