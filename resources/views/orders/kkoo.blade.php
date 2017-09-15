@extends('layouts.master')

@section('title','KKOOTZ Orders')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-info">
                    @can('Create Post')
                    <div class="panel-heading"><h3>KKOOTZ Orders</h3></div>
                        <div class="panel-body">
                           @if($kkoo_orders->count()>0)
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Cart ID</th>
                                            <th>reference</th>
                                            <th>Shipping Address</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($kkoo_orders as $order)
                                            <tr>
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->cart_id}}</td>
                                                <td>{{$order->reference}}</td>
                                                <td><a href="{{url('/orders/'.$order->id)}}" class="btn btn-success">View Address</a></td>
                                                <td>Pending</td>        
                                             </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                @else
                                <h2><font color="red">No Oders So Far!</font></h2>
                             @endif 
                        </div>
                        @endcan
                </div>
            </div>
        </div>
    </div>
@endsection