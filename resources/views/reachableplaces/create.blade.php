@extends('layouts.master')

@section('title', '| Add Reachable Place')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <h1>Add Reachable place in Tanzania(Region or City)</h1>
        <hr>

    {{-- Using the Laravel HTML Form Collective to create our form --}}
        {{ Form::open(array('route' => 'reachableplaces.store')) }}

        <div class="form-group">
            {{ Form::label('name', 'Area/Location Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::submit('Add Area', array('class' => 'btn btn-success btn-lg btn-block')) }}
            {{ Form::close() }}
        </div>
        </div>
    </div>

@endsection