@extends('layouts.master')

@section('title', '| Create Dimensions')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    <h1><i class='fa fa-key'></i> Add Dimensions</h1>
    <br>

    {{ Form::open(array('url' => 'dimensions')) }}

    <div class="form-group">
        {{ Form::label('size', 'Sizes available') }}
        {{ Form::text('size', '', array('class' => 'form-control')) }}
    </div>
    <br>
    
    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}

</div>

@endsection
