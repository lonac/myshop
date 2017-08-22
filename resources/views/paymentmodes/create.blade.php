@extends('layouts.master')

@section('title', '| Payment Mode')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <h1>Payment Mode</h1>
        <hr>

    {{-- Using the Laravel HTML Form Collective to create our form --}}
        {{ Form::open(array('route' => 'paymentmodes.store')) }}

        <div class="form-group">
            {{ Form::label('companyname', 'Company Name') }}
            {{ Form::text('companyname', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('accountname', 'Account Name') }}
            {{ Form::text('accountname', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('accountnumber', 'Account Number') }}
            {{ Form::number('accountnumber', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::submit('Add Mode', array('class' => 'btn btn-success btn-lg btn-block')) }}
            {{ Form::close() }}
        </div>
        </div>
    </div>

@endsection