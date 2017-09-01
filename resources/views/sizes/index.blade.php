@extends('layouts.master')

@section('title','sizes')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                @if($sizes!==null)
                <div class="panel panel-info">
                    <div class="panel-heading">Available Sizes</div>
                    @foreach ($sizes as $size)
                        <div class="panel-body">
                           <strong> {{$size->size}} <a href="{{url('products/'.$size->product_id.'/sizes/'.$size->id.'/edit')}}">Edit</a></strong>
                        </div>
                    @endforeach
                </div>
                @endif
                    
            </div>
        </div>
    </div>
@endsection