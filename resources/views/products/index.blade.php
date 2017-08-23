@extends('layouts.master')

@section('title','products')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Products</h3></div>
                    <div class="panel-heading">Page {{ $products->currentPage() }} of {{ $products->lastPage() }}</div>
                        @foreach ($productpictures as $productpicture)
                            <div class="panel-body">
                                <a href="#">
                                    <img src="{{ asset('storage/' . $productpicture->filename) }}" alt="">
                                </a>     
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