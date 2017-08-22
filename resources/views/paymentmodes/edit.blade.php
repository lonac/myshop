@extends('layouts.master')

@section('title', '| Edit Payment Mode')

@section('content')
<div class="row">

    <div class="col-md-8 col-md-offset-2">

        <h1>Edit Payment Mode</h1>
        <hr>
            {{ Form::model($paymentmode, array('route' => array('paymentmodes.update', $paymentmode->id), 'method' => 'PUT')) }}
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
            
            {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}
          </div>
    </div>
</div>

@endsection