@extends('layouts.master')

@section('title','Orders Payments')

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
                    <div class="panel-heading"><h4>My Order</h4></div>
                        <div class="panel-body">
                           @if($cart!==null)
                             <p><h2>Make <a href="{{url('/cart/'.$cart->id.'/orders/create')}}" class="btn btn-primary"
                                >PAYMENT NOW</a> for this Order or <a href="{{url('/cart')}}" class="btn btn-warning">PAY LATER</a></h2></p>
                           @else
                            <strong>No Order Placed</strong>
                           @endif
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection