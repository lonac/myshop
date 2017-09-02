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
           
            @can('Create Category')
            <div class="col-md-5 col-md-offset-0">
                <div class="panel panel-primary">
                    <div class="panel-heading"><strong>Admin Panel</h3></strong></div>
                    <div class="panel-body">
                      <h3><a href="{{url('orders/kkoo')}}">ALL KKOO ORDERS</a></h3>
                       <strong> <a href="{{url('/permissions')}}">View Permissions</a></strong><br>
                       <strong> <a href="{{url('/roles')}}">View Roles</a></strong><br>
                       <strong> <a href="{{url('/users')}}">View Users</a></strong><br>
                       <strong> <a href="{{url('/categories')}}">Categories</a></strong><br>
                       <strong> <a href="{{url('/reachableplaces')}}">Reachable Places</a></strong><br>
                       <strong> <a href="{{url('/paymentmodes')}}">Payment Modes</a></strong><br>
                       <strong> <a href="{{url('/dimensions')}}">dimensions</a></strong><br>
                    </div>
                </div>
            </div>
            @endcan

        </div>
    </div>
@endsection
