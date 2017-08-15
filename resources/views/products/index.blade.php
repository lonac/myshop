@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Products</h3></div>
                    <div class="panel-heading">Page {{ $products->currentPage() }} of {{ $products->lastPage() }}</div>
                    @foreach ($products as $product)
                        <div class="panel-body">
                            <li style="list-style-type:disc">
                                <a href="{{ route('products.show', $product->id ) }}"><b>{{ $product->title }}</b><br>
                                    <p class="teaser">
                                       {{  str_limit($product->body, 100) }} {{-- Limit teaser to 100 characters --}}
                                    </p>
                                </a>
                            </li>
                        </div>
                    @endforeach
                    </div>
                    <div class="text-center">
                        {!! $products->links() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection