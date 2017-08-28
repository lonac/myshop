@extends('layouts.master')

@section('title','products')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Products</h3></div>
                    <div class="panel-heading">Page {{ $products->currentPage() }} of {{ $products->lastPage() }}</div>
                       @if($products->count()>0)
                            @foreach($products as  $product)
                                <div class="panel-body">
                                    <a href="{{url('/products/'.$product->id)}}">
                                        <img src="{{ asset('images/catalog/' .$product->name) }}" class= "img-responsive style= height: 22px; width: 100px;">
                                    </a>     
                                </div>
                            @endforeach
                       @else
                       <p><h2>No Products So Far!</h2></p>
                       @endif
                </div>
            </div>
        </div>
     </div>
@endsection