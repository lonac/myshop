@extends('layouts.master')

@section('title', '| View Subcategory')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    <h2>{{$subcategory->name}}
                    </h2> 
                <div class="panel-body">
                    <h2>Here is {{$subcategory->name}} Products</h2> 
                    @if($products->count()>0)
                        @foreach($products as $product)
                            <a href="{{url('products/'.$product->id)}}">{{$product->name}}</a><br>
                        @endforeach
                    @else
                        <h2>No Products in Here</h2>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

@endsection