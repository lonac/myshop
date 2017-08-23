@extends('layouts.master')

@section('title','Account')

@section('content')
 <div class="container">
        <div class="row">
            <div class="col-md-2 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>Nomal Users</h3></strong></div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>

            <div class="col-md-5 col-md-offset-0">
                <div class="panel panel-danger">
                    <div class="panel-heading"><strong>Admin Panel</h3></strong></div>
                    <div class="panel-body">
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

            <div class="col-md-4 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading"><strong>Categories</h3></strong></div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
