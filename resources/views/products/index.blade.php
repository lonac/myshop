@extends('layouts.master')

@section('title','KKOO')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>
                            {{$category->name}}>{{$subcategory->name}}
                        </strong>
                    </div>
                    <div class="panel-heading"><h3>Here is the Products</h3></div>
                    <div class="panel-body">
                        @foreach ($products as $product)
                        <div class="panel-body">
                            <li style="list-style-type:disc">
                                <a href="{{url('categories/'.$category->id.'/subcategories/'.$subcat->id.'/products/'.$product->id) }}"><b>{{ $product->name }}</b><br>
                                    <p class="teaser">
                                       {{  str_limit($product->body, 100) }} {{-- Limit teaser to 100 characters --}}
                                    </p>
                                </a>
                            </li>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection