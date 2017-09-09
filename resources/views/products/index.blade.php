@extends('layouts.master')

@section('title','products')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading"><strong>Categories</div>
                    <div class="panel-body">
                        @if($categories->count()>0)
                            @foreach($categories as $category)
                                <a href="{{'/categories/'.$category->id}}">{{$category->name}}</a><br>
                            @endforeach
                        @endif
                    </div></strong>
                </div>

            </div>
            <form>
            <div class="col-md-9 col-md-offset-0">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <div class="panel panel-info">
                    <div class="panel-heading">
                    @can('Create Product')
                        <h4><a href="{{url('products/create')}}" class="btn btn-warning">Upload New Product</a></h4>
                    @endcan
                    </div>
                    <div class="panel-body">
                    <table class="table table-hover">
                       @if($products->count()>0)
                            @foreach($products as  $product)
                                <a href="{{url('/products/'.$product->id)}}">
                                     <img src="{{ asset('images/catalog/' .$product->name) }}" height="100" width="100">
                                     {{$product->cost}}
                                       {{  str_limit($product->body, 10) }} {{-- Limit teaser to 100 characters --}}
                                 </a>
                            @endforeach
                             </table>       
                                </div>
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
        </form>
        </div>
     </div>
@endsection