@extends('layouts.master')

@section('title','Products')

@section('content')
    <div class="container">
        <div class="row">
            @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
            <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading"><strong>Categories</div>
                    <div class="panel-body">
                        @if($categories->count()>0)
                            @foreach($categories as $category) 
                                <div class="dropdown dropdown-right" role="dropdown" aria-labelledby="dropdown"> 
                                    <strong><a href="{{url('/categories/'.$category->id)}}">{{$category->name}}</a></strong>     
                                    <div class="dropdown-content">
                                         @if($category->subcategories->count()) 
                                            @foreach ($category->subcategories as $subcategory)
                                               <ul> <strong><a href="{{url('/categories/'.$subcategory->category_id.'/subcategories/'.$subcategory->id)}}">
                                                    {{$subcategory->name}}</a></strong></ul>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>       
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
                                  <p style="float:left; font-size: 9pt; text-align: center; width:30%; margin-right: 2%; margin-bottom: 1.5em;">
                                     <a href="{{url('/products/'.$product->id)}}"><img src="{{ asset('images/catalog/' .$product->name) }}" height="100" width="100"><br> 
                                        <strong>{{  str_limit($product->name,10) }}</strong></a><br>
                                        Tsh.<strong>{{$product->cost}}</strong>  
                                   </p>
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