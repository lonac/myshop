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
                           @if($order!==null)
                            <h4>
                                <label for="name">User Name : </label>  {{Auth::user()->name}}<br>
                                <label for="orderid">Order ID : </label>  {{$order->id}}<br>
                                <label for="reference">Payment Reference : </label> {{$order->reference}} <br>
                                <label for="shipping">Shipping Address : </label>
                                <a href="{{url('cart/'.$cart->id.'/shippingaddress')}}" class="btn btn-primary">Review Address</a><br>
                            </h4>
                           @else
                            <h3>You have already placed an order</h3>
                             <p><h2>Make <a href="{{url('/cart/'.$cart->id.'/orders/create')}}" class="btn btn-primary"
                                >PAYMENT NOW</a> OR <a href="{{url('/cart')}}" class="btn btn-warning">PAYMENT LATER</a> for this Order</h2></p>
     
                           @endif
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection