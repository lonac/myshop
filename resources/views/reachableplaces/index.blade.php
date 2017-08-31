@extends('layouts.master')

@section('title','Area or Location')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-0">
                <div class="panel panel-info">
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                    <div class="panel-heading">
                    <h4>Reachable Places (where KKOO can Ship)    
                            @can('Create Category')
                                <a href="{{url('/reachableplaces/create')}}" class="btn btn-primary">Add Place ?</a>
                            @endcan  </h4>                
                    </div>
                        <div class="panel-body">
                           @foreach ($place as $placee)
                                <strong>{{ $placee->name}}</strong>
                                @can('Create Category')
                                    <form method="POST" action="{{url('reachableplaces/'.$placee->id)}}">
                                            {{method_field('delete')}}
                                            {{ csrf_field()}}
                                         <a href="{{url('/reachableplaces/'.$placee->id.'/edit')}}" class="btn btn-warning">Edit?</a>

                                        <button type="submit" class="btn  btn-danger">Delete</button>
                                    </form>
                                @endcan
                                <br>
                            @endforeach 
                        </div>
                </div>
            </div>
            </div>
        </div>
@endsection