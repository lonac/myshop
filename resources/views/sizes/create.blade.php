@extends('layouts.master')

@section('title', '| Add Size')

@section('content')
    <div class="row">
        @can('Create Product')
        <div class="col-md-8 col-md-offset-2">
            <h3>Does the Product Has Any SIZE??</h3>
            <div class="panel panel-info">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <div class="panel-heading">
                   <h4> Add Size for {{$product->name}}</h4>
                </div>
                <div class="panel-body"> 
                    <form method="POST" action="{{ url('products/'.$product->id.'/sizes/create') }}">

                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" name="size" id="size" class="form-control" placeholder="e.g. 35" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">ADD</button>
                            <a href="{{url('products/'.$product->id)}}" class="btn btn-warning">DONE</a>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
        @endcan
    </div>

@endsection