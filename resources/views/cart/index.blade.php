@extends('layouts.master')

@section('title','Cart')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Cart</h1></div>
                        <div class="panel-body">
                            @if($carts->count()>0)
                                show my products
                            @else
                                no products
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection