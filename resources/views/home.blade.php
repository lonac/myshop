@extends('layouts.master')

@section('title','Account')

@section('content')
 <div class="container">
    <div class="row">
      <h1>@if(session('status'))
              <div class="alert alert-success">
                {{session('status')}}
              </div>
            @endif</h1>
       <div class="col-md-12 col-md-offset-0">
              <div class="panel panel-info">
                  <div class="panel-heading"><strong>Categories</h3></strong></div>
                  <div class="panel-body">
                    <strong>
                        @if($categories->count()>0)
                            @foreach($categories as $category)
                                <a href="{{url('categories/'.$category->id)}}">{{$category->name}}</a>
                            @endforeach
                        @endif
                    </strong>
                  </div>
              </div>
          </div>
    </div>
        <div class="row">
            @if($mycarts->count()>0)
            <div class="col-md-3 col-md-offset-0">
                <div class="panel panel-info">
                    <div class="panel-heading"><strong><a href="{{url('/cart')}}">My Cart</a></h3></strong></div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>
            @else
              <strong><a href="{{url('/products')}}" type="button" class="btn btn-success btn-lg btn-block">Shop Now?</a></strong> 
            @endif

        </div>
    </div>
@endsection
