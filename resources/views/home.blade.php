@extends('layouts.master')

@section('title','Account')

@section('content')
 <div class="container">
        <div class="row">
          <div class="col-md-3 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>Categories</h3></strong></div>
                    <div class="panel-body">
                      <strong>
                          @if($categories->count()>0)
                              @foreach($categories as $category)
                                  <a href="{{url('categories/'.$category->id)}}">{{$category->name}}</a><br>
                              @endforeach
                          @endif
                      </strong>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong><a href="{{url('/cart')}}">My Cart</a></h3></strong></div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
