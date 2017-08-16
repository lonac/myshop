@extends('layouts.master')

@section('title','KKOO')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>Categories</h3></strong></div>
                    <div class="panel-body">
                        @if(!$category->isEmpty())
                            @foreach($category as $catee)
                                <strong><a href="{{url('categories/'.$catee->id)}}">{{$catee->name}}</a></strong><br>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-7 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>Images Here!</h3></strong></div>
                    <div class="panel-body">
             
                    </div>
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