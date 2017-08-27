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
                <div class="panel panel-primary">
                    <div class="panel-heading"><h3>Orders</h3></div>
                        <div class="panel-body">
                           @if($myorders!==null)
                                <table class="table table-hover">
                                    <thead>
                                        <tr>     
                                            <th>Order ID</th>
                                            <th>reference</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($myorders as $order)
                                            <tr>
                                                <td>--</td>
                                                <td></td>
                                                <td>Pending</td>        
                                             </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                @else
                                    <a href="{{url('/products')}}" type="button" class="btn btn-success">Shop Now?</a>
                             @endif 
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection