<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Customer;

class CustomersDetailsController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customerdetail = Auth::user()->customers;

        return view('customerdetails.index',compact('customerdetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customerdetails.create');
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
            'firstname'=>'required|max:20',
            'lastname'=>'required|max:20',
            'region'=>'required|max:30',
            'address'=>'required|max:100',
            'phonenumber1'=>'required|max:10',

            ]);
        
        $customerdetails = new Customer;
        $customerdetails->firstname = $request->input('firstname');
        $customerdetails->middlename = $request->input('middlename');
        $customerdetails->lastname = $request->input('lastname');
        $customerdetails->region = $request->input('region');
        $customerdetails->address = $request->input('address');
        $customerdetails->phonenumber1 = $request->input('phonenumber1');
        $customerdetails->Phonenumber2 = $request->input('Phonenumber2');
        $customerdetails->user_id = Auth::user()->id;

        $customerdetails->save();

        return redirect('customerdetails');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $customerdetail = Auth::user()->customers;

        return view('customerdetails.show',compact('customerdetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $customerdetail = Auth::user()->customers;

        return view('customerdetails.edit',compact('customerdetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'firstname'=>'required|max:20',
            'lastname'=>'required|max:20',
            'region'=>'required|max:30',
            'address'=>'required|max:100',
            'phonenumber1'=>'required|max:10',

            ]);

        $custdet_id = Auth::user()->customers->id;
        
        $customerdetails = Customer::findOrFail($custdet_id);
        $customerdetails->firstname = $request->input('firstname');
        $customerdetails->middlename = $request->input('middlename');
        $customerdetails->lastname = $request->input('lastname');
        $customerdetails->region = $request->input('region');
        $customerdetails->address = $request->input('address');
        $customerdetails->phonenumber1 = $request->input('phonenumber1');
        $customerdetails->Phonenumber2 = $request->input('Phonenumber2');
        $customerdetails->user_id = Auth::user()->id;

        $customerdetails->save();

        return redirect('customerdetails/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $post = Customer::findOrFail($id);
        $post->delete();

        return redirect()->route('customerdetails.index')
            ->with('flash_message',
             'Article successfully deleted');
    }
}
