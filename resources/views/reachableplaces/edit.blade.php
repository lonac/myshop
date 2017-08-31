@extends('layouts.master')

@section('title', '| Edit Area/Location')

@section('content')
<div class="row">

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading"><h4>Edit Area/Location</h4></div>
                <form method="POST" action="{{url('reachableplaces/'.$place->id.'/edit')}}">

                    {{csrf_field()}}

                    {{method_field('patch')}}
                    <div class="panel-body">
                        <div class="form-group">
                            <input type="text" name="name" value="{{$place->name}}" class="form-control">
                        </div>
                        
                        {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection