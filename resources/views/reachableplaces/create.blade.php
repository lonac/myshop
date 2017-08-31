@extends('layouts.master')

@section('title', 'Add Reachable Place')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading"><h4>Add Reachable place in Tanzania(Region or City)</h4></div>
            <div class="panel-body">
                <form method="POST" action="{{url('/reachableplaces/create')}}">
                    {{csrf_field()}}

                   <div class="form-group">
                        {{ Form::label('name', 'Area/Location Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                   </div> 

                   <div class="form-group">
                        {{ Form::submit('Add Place', array('class' => 'btn btn-primary btn-lg btn-block')) }}
                    </div>
                </form>
            </div>
        </div>
        
        </div>
    </div>

@endsection