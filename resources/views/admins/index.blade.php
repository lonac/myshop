@extends('layouts.master')

@section('title', 'Admin Panel')

@section('content')

<div class="container">
    <div class="row">
    	<div class="col-md-4 col-md-offset-1">
    		<div class="panel panel-info">
    			<div class="panel-heading">
                    <a href="{{url('/users')}}" class="btn btn-success">Users</a>
                    <a href="{{url('/permissions')}}" class="btn btn-danger">Permissions</a> and
                    <a href="{{url('/roles')}}" class="btn btn-warning">Roles</a>  
                </div>
    			<div class="panel-body">		
                    @can('Create Category')
                      <a href="{{url('orders/kkoo')}}" class="btn btn-success btn-sm btn-block">All Kkootz Orders</a><br>
                       <strong> <a href="{{url('/categories')}}" class="btn btn-default btn-sm btn-block">Categories</a></strong><br>
                       <strong> <a href="{{url('/reachableplaces')}}" class="btn btn-info btn-sm btn-block">Reachable Places</a></strong><br>
                       <strong> <a href="{{url('/paymentmodes')}}" class="btn btn-default btn-sm btn-block">Payment Modes</a></strong><br>
                       <strong> <a href="{{url('/dimensions')}}" class="btn btn-success btn-sm btn-block">dimensions</a></strong><br>      
                    @endcan
    			</div>
    		</div>
    	</div>
    </div>

</div>

@endsection