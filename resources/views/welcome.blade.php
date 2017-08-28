@extends('layouts.master')

@section('title','KKOO')

@section('content')
 <div class="container">
        <div class="row">
            <div class="col-md-2 col-md-offset-0">
                <div class="panel panel-primary">
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
                    <img class="mySlides" src="{{asset('product/image/trouser1.png')}}" style="width:100%">
                </div>
             </div>
        

            <div class="col-md-3 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>more</h3></strong></div>
                    <div class="panel-body">
                                
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
