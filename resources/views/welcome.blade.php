@extends('layouts.master')

@section('title','KKOO')

@section('content')
 <div class="container">
        <div class="row">
            <div class="col-md-2 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>Categories</h3></strong></div>
                    <div class="panel-body">
                        @if($category->count()>0)
                            @foreach($category as $catee)
                                <a href="{{url('categories/'.$catee->id)}}">{{$catee->name}}</a><br>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-7 col-md-offset-0">
                <div class="panel panel-default">
                   <div class="panel-heading">Page {{ $products->currentPage() }} of {{ $products->lastPage() }}</div>
                    @foreach ($products as $product)
                        <div class="panel-body">
                            <li style="list-style-type:disc">
                                <a href="{{ route('products.show', $product->id ) }}"><b>{{ $product->name }}</b><br>
                                    <p class="teaser">
                                       {{  str_limit($product->manufacturer, 100) }} {{-- Limit teaser to 100 characters --}}
                                    </p>
                                </a>
                            </li>
                        </div>
                    @endforeach
                    </div>
                </div>

            <div class="col-md-3 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>more</h3></strong></div>
                    <div class="panel-body">
                 here
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
