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

            <div class="col-md-4 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>Products!</h3></strong></div>
                    <div class="panel-body">
                        @if($productpictures->count()>0)
                           @foreach ($productpictures as $productpicture)
                            <div class="panel-body">
                             <div class="panel-body">
                                <a href="{{url('products/'.$productpicture->product_id)}}">
                                    <img src="{{ asset('storage/' . $productpicture->filename) }}" class= "img-responsive style= height: 22px; width: 100px;">
                                </a>     
                            </div>
                            @endforeach
                        @endif
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
