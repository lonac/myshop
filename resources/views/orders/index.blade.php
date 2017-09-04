@extends('layouts.master')

@section('title','Orders')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="panel panel-info">
                    <div class="panel-heading"><h3>Orders Review</h3></div>
                        <div class="panel-body">
                            <h4>
                                <label for="name">User Name : </label>  {{Auth::user()->name}}<br>
                              
                                <label for="shipping">Shipping Address : </label>
                                <a href="{{url('cart/'.$cart->id.'/shippingaddress')}}" class="btn btn-primary">Review Address</a><br>
                            </h4>
                         
     
                   
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection