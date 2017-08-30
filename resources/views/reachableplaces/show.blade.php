@extends('layouts.master')

@section('title', $place->name)

@section('content')

<div class="container">
    <div class="row">
            <div class="col-md-10 col-md-offset-0">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <strong>
                        {{ $place->name }}
                            @can('Edit Category')
                                    <a href="{{ route('reachableplaces.edit', $place->id) }}" class="btn btn-info" role="button">Edit</a>
                             @endcan
                        </strong>         

                            {!! Form::open(['method' => 'DELETE', 'route' => ['reachableplaces.destroy', $place->id] ]) !!}
                            <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>

                            @can('Delete Category')
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            @endcan
                            {!! Form::close() !!}
                        </div>

                         <div class="panel-body"> 
                            <h2>Here is {{$place->name}} Area</h2>

                        </div>
             </div>
    </div>
</div>

@endsection