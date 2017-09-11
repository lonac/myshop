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
                            <p style="float:left; font-size: 9pt; text-align: center; width:30%; margin-right: 2%; margin-bottom: 1.5em;">
                                     <a href="{{url('/products/'.$product->id)}}"><img src="{{ asset('images/catalog/' .$product->name) }}" height="100" width="100"><br> 
                                        <strong>{{  str_limit($product->name,10) }}</strong></a><br>
                                        Tsh.<strong>{{$product->cost}}</strong>  
                                   </p>
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