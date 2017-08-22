@extends('layouts.master')

@section('title','Area or Location')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">
                            @foreach ($place as $placee)
                                <strong><a href="{{ route('reachableplaces.show', $placee->id ) }}">{{ $placee->name}}</a></strong>
                            @endforeach 
                            @can('Create Category')
                                <a href="{{url('reachableplaces/create')}}" class="button">Add Place</a>
                            @endcan                  
                    </div>
                        <div class="panel-body">
                           
                        </div>
                    </div>
                    <div class="text-center">

                    </div>
            </div>
            </div>
        </div>
@endsection