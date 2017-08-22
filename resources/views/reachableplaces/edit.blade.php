@extends('layouts.master')

@section('title', '| Edit Area/Location')

@section('content')
<div class="row">

    <div class="col-md-8 col-md-offset-2">

        <h1>Edit Area/Location</h1>
        <hr>
            {{ Form::model($place, array('route' => array('reachableplaces.update', $place->id), 'method' => 'PUT')) }}
            <div class="form-group">
            {{ Form::label('name', 'Area/Location Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}<br>
            
            {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}
          </div>
    </div>
</div>

@endsection