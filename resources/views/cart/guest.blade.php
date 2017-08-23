@extends('layouts.master')

@section('title','Cart')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Cart</h1></div>
                        <div class="panel-body">
                            <P>To view and add Carts please <a href="{{url('/login')}}">Login</a> to your acconut firts</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection