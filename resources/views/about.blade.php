@extends('layouts.master')

@section('title','About')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-0">
                <div class="panel panel-info">
                <div class="panel-heading"><h4>Categories</h4></div>
                    <div class="panel-body">
                        @if($categories->count()>0)
                            @foreach($categories as $category)
                                <a href="{{url('categories/'.$category->id)}}">{{$category->name}}</a><br>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-9 col-md-offset-0">
                <div class="panel panel-info">
                <div class="panel-heading"><h4>New to KKOO?</h4></div>
                    <div class="panel-body">
                        <p>KKOO is here to offer you with the best product of your choices:</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection