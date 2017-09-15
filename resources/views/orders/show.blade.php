@extends('layouts.master')

@section('title', 'Order Address')

@section('content')

<div class="container">
    <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading"><h4>Shipping's Address on OrderID= {{$order->id}}</h4></div>            
                @if(!$address==null)
                    <div class="panel-body">
                        <label>First Name: </label> {{$address->firstname}}<br>
                        <label>Middle Name: </label> {{$address->middlename}}<br>
                        <label>Last Name: </label> {{$address->lastname}}<br>
                        <label>Address: </label> {{$address->address}}<br>
                        <label>Region: </label> {{$address->region}}<br>
                        <label>Phone Numbers: </label> {{$address->phonenumber1}} or {{$address->phonenumber2}} <br>
                    </div>
                @else
                    <h1>There is No Address for this Order</h1>
                @endif
            </div>
    </div>
</div>

@endsection