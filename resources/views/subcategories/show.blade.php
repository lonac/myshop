@extends('layouts.master')

@section('title', $subcategory->name)

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-info">
                <div class="panel panel-heading"><h4>{{$subcategory->name}} </h4> </div>         
                <div class="panel-body">
                    @if($products->count()>0)
                        @foreach($products as $product)
                            <a href="{{url('products/'.$product->id)}}">{{$product->name}}</a>
                             <img src="{{ asset('images/catalog/' .$product->name) }}" style="width:10%">
                            <br>
                        @endforeach
                    @else
                        <h4>No Products in Here</h4>
                    @endif
                </div>
        </div>
    </div>
</div>
</div>

@endsection