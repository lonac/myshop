@extends('layouts.master')

@section('title', '| Add Size')

@section('content')
    <div class="row">
        @can('Create Product')
        <div class="col-md-8 col-md-offset-2">
            <h3>Size for Products like CLOTHES,</h3>
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
                    <form method="POST" action="{{ url('products/'.$product->id.'/clothsizes/create') }}">

                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" name="size" id="size" class="form-control" 
                            placeholder="XXL,XL,L,M (add one by one)" />
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">ADD</button>
                            <a href="{{url('products/'.$product->id.'/sizes/create')}}" class="btn btn-warning">SKIP</a>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
        @endcan
    </div>

@endsection