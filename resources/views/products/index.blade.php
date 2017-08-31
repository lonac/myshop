@extends('layouts.master')

@section('title','products')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <div class="panel panel-info">
                    <div class="panel-heading"><h4>Products for 
                        @if($categories->count()>0)
                            @foreach($categories as $category)
                                <a href="{{'/categories/'.$category->id}}">{{$category->name}}</a>
                            @endforeach
                        @endif
                    </h4></div>
                       @if($products->count()>0)
                            @foreach($products as  $product)
                                <div class="panel-body">
                                    <a href="{{url('/products/'.$product->id)}}">
                                        <img src="{{ asset('images/catalog/' .$product->name) }}" style="width:20%">
                                        {{$product->name}}
                                    <p class="teaser">
                                       {{  str_limit($product->body, 10) }} {{-- Limit teaser to 100 characters --}}
                                    </p>
                                    </a>     
                                </div>
                            @endforeach
                        <div class="text-center">
                            {!! $products->links() !!}
                        </div>
                       @else
                       <div class="panel-body">
                           <p><h2>No Products So Far!</h2></p>
                            @can('Create Product')
                            <a href="{{url('/products/create')}}" class="btn btn-primary">Add Products?</a>
                            @endcan
                        </div>
                       @endif
                </div>
            </div>
        </div>
     </div>
@endsection