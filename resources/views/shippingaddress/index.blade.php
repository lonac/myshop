@extends('layouts.master')

@section('title','Shipping Address')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <div class="panel panel-info">
                    @if($myship!==null)
                    <div class="panel-heading">
                        <form method="POST" action="{{ url('cart/'.$cart->id.'/shippingaddress') }}">
                            {{ method_field('delete') }}

                            {{ csrf_field() }}
                            <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <a href="{{url('cart/'.$cart->id.'/shippingaddress/edit')}}" class="btn btn-success">Edit</a>
                        </form>
                    </div>
                        <div class="panel-body">
                            <label>First Name: </label> {{$myship->firstname}}<br>
                            <label>Middle Name: </label> {{$myship->middlename}}<br>
                            <label>Last Name: </label> {{$myship->lastname}}<br>
                            <label>Address: </label> {{$myship->address}}<br>
                            <label>Region: </label> {{$myship->region}}<br>
                            <label>Phone Numbers: </label> {{$myship->phonenumber1}}  {{$myship->phonenumber2}} <br>
                        </div>
                    @else
                        <div class="panel-heading">
                            <strong><a href="{{url('cart/'.$cart->id.'/shippingaddress/create')}}">Add Details</a></strong>
                        </div>
                    @endif
                </div>
            </div>
    </div>
     </div>
@endsection