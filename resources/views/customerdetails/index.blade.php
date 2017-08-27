@extends('layouts.master')

@section('title','Customer details')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <form method="POST" action="{{ url('customerdetails') }}">
                            {{ method_field('delete') }}

                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <a href="{{url('customerdetails/edit')}}" class="btn btn-success">Edit</a>
                        </form>
                    </div>
                        <div class="panel-body">
                            <label>First Name: </label> {{$customerdetail->firstname}}<br>
                            <label>Middle Name: </label> {{$customerdetail->middlename}}<br>
                            <label>Last Name: </label> {{$customerdetail->lastname}}<br>
                            <label>Address: </label> {{$customerdetail->address}}<br>
                            <label>Region: </label> {{$customerdetail->region}}<br>
                            <label>Phone Numbers: </label> {{$customerdetail->phonenumber1}}  {{$customerdetail->phonenumber2}} <br>
                        </div>
                </div>
            </div>
    </div>
     </div>
@endsection