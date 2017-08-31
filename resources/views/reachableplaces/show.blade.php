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
                        </div>       
                        <div class="panel-body"> 
                            <form method="POST"  action="{{url('/reachableplaces/'.$place->id)}}">
                                <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>

                                @can('Delete Category')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                @endcan
                            </form>
                        </div>

                         
                    <h2>Here is {{$place->name}} Area</h2>

                        
             </div>
    </div>
</div>

@endsection