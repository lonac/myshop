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
                    <div class="panel-heading">
                    @can('Create Product')
                        <h4><a href="{{url('products/create')}}" class="btn btn-warning">Upload New Product</a></h4>
                    @endcan
                    <h4>Products for 
                        @if($categories->count()>0)
                            @foreach($categories as $category)
                                <a href="{{'/categories/'.$category->id}}">{{$category->name}}</a>  
                            @endforeach
                        @endif
                    </h4></div>
                    <div class="panel-body">
                    <table class="table table-hover">
                       @if($products->count()>0)
                            @foreach($products as  $product)
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{$product->name}} for {{$product->categoryname}}
                                            </td>
                                            <td>
                                                <p class="teaser">
                                                    <a href="{{url('/products/'.$product->id)}}">
                                                       {{  str_limit($product->body, 20) }} Read more >>>
                                                    </a> 
                                                </p>
                                            </td>
                                            <td>
                                                <strong>{{$product->cost}}</strong>
                                            </td>

                                            <td>
                                                <a href="{{url('/products/'.$product->id)}}">
                                                     <img src="{{ asset('images/catalog/' .$product->name) }}" style="width:10%">
                                                 </a>
                                            </td>

                                          </tr>
                                    </tbody>                
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
        </div>
     </div>
@endsection