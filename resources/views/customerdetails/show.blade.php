@extends('layouts.master')

@section('title', 'Customer Details')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-2">
			<div class="panel panel-info">
				<div class="panel-heading"><h4>Buyer's Details :  
					<a href="{{url('customerdetails/edit')}}" class="btn btn-success">Edit Details?</a>
				</h4></div>
				@if(!$customerdetail==null)
					<div class="panel-body">
						<label>First Name: </label> {{$customerdetail->firstname}}<br>
						<label>Middle Name: </label> {{$customerdetail->middlename}}<br>
						<label>Last Name: </label> {{$customerdetail->lastname}}<br>
						<label>Address: </label> {{$customerdetail->address}}<br>
						<label>Region: </label> {{$customerdetail->region}}<br>
						<label>Phone Numbers: </label> {{$customerdetail->phonenumber1}}  {{$customerdetail->phonenumber2}} <br>
					</div>
				@else
					<div class="panel-body"><h2><a href="{{url('customerdetails/create')}}">Add Buyer's Details</a></h2></div>
				@endif
	    	</div>
		</div>
	</div>
</div>

@endsection

