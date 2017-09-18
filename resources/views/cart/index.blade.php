@extends('layouts.master')

@section('title','Cart')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <div class="panel panel-info">
                    <div class="panel-heading"><h2>My Cart</h2></div>
                        <div class="panel-body">
                        @if($mycarts->count()>0)
                        <table class="table table-hover">
                            <thead>
                                <tr>     
                                    <th>View</th>
                                    <th>Name</th>
                                    <th>Cost</th>
                                    <th>Quantity</th>
                                    <th>Size</th>
                                    <th>Address</th>
                                    <th>Order</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mycarts as $mycart)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('images/catalog/'.$mycart->product_id.'.jpg')}}" height="30" width="30">
                                        </td>
                                        <td>
                                            {{ str_limit($mycart->products->name,10)}}
                                        </td>
                                        <td>{{$mycart->cost}}</td>
                                        <td>{{$mycart->quantity}}</td>
                                        <td>{{$mycart->size}}</td>
                                        <td>
                                            <a href="{{url('/cart/'.$mycart->id.'/shippingaddress')}}" class="btn btn-primary">Shipping Address</a> 
                                        </td>
                                        <td>
                                            <a href="{{url('/cart/'.$mycart->id.'/orders')}}" class="btn btn-success">Check Order</a> 
                                        </td>
                                        <td>
                                           {{-- <a href="{{url('/cart/'.$mycart->id)}}" class="btn btn-warning">Edit?</a> --}}
                                            <a href="{{url('/cart/'.$mycart->id)}}" class="btn btn-danger">Remove?</a> 
                                        </td>                
                                     </tr>
                                @endforeach
                            </tbody>
                        </table>

                        @else
                           <strong>No Product in Your Cart <a href="{{url('/products')}}" type="button" class="btn btn-success">Shop Now?</a></strong> 
                        @endif
                        
                    </div>
                    </div>
                </div>
            </div>
            @if(!$myship==null)
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h2>My Order:</h2></div>
                        <div class="panel-body">
                            <a href="{{url('orders/create')}}" class="btn btn-success">Place Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endif

        </div>
@endsection