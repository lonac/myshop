@extends('layouts.master')

@section('title', 'Shipping Address')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
        <div class="panel panel-info">
            <div class="panel-heading"><h4>Add shipping  address below</h4></div>
                <div class="panel-body">
            {{-- Using the Laravel HTML Form Collective to create our form --}}
                <form METHOD="POST" action="{{url('cart/'.$cart->id.'/shippingaddress/create')}}">
                    {{ csrf_field()}}

                <div class="form-group">
                    {{ Form::label('firstname', 'First name') }}
                    {{ Form::text('firstname', null, array('class' => 'form-control')) }}
                    <br>

                    {{ Form::label('middlename', 'Middle name') }}
                    {{ Form::text('middlename', null, array('class' => 'form-control')) }}
                    <br>

                    {{ Form::label('lastname', 'Last name') }}
                    {{ Form::text('lastname', null, array('class' => 'form-control')) }}
                    <br>

                    {{ Form::label('address', 'Address') }}
                    {{ Form::textarea('address', null, array('class' => 'form-control')) }}
                    <br>

                    {{ Form::label('region', 'region') }}
                    {{ Form::text('region', null, array('class' => 'form-control')) }}
                    <br>


                    {{ Form::label('Phonenumber', 'Phone Number (1)') }}
                    {{ Form::number('phonenumber1', null, array('class' => 'form-control')) }}
                    <br>

                    {{ Form::label('Phonenumber', 'Phone Number (2)') }}
                    {{ Form::number('phonenumber2', null, array('class' => 'form-control')) }}
                    <br>

                    

                    {{ Form::submit('Save Details', array('class' => 'btn btn-success btn-lg btn-block')) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>

        
        </div>
    </div>

@endsection