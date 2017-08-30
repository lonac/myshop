@extends('layouts.master')

@section('title','Payment Mode')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-0">
                <div class="panel panel-info">
                    <div class="panel-heading">
                            @foreach ($paymentmodes as $paymentmode)
                                <strong><a href="{{ route('paymentmodes.show', $paymentmode->id ) }}">{{ $paymentmode->name}}</a></strong>
                            @endforeach 
                            @can('Create Category')
                                <a href="{{url('paymentmodes/create')}}" class="button">Add New Mode</a>
                            @endcan                  
                    </div>
                        <div class="panel-body">
                             @foreach ($paymentmodes as $paymentmode)
                            <strong>Company Name:</strong>{{ $paymentmode->companyname}}
                            <br>
                            <strong>Account Name:</strong>{{ $paymentmode->accountname}}
                            <br>
                            <strong>Account Number:</strong>{{ $paymentmode->accountnumber}}
                            <br>                    
                        </div>
                        @endforeach
                    </div>
                    <div class="text-center">

                    </div>
            </div>
            </div>
        </div>
@endsection