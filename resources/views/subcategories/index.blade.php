@extends('layouts.master')

@section('title','KKOO')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    @foreach ($subcat as $subcatee)
                        <div class="panel-body">
                                <a href="{{url('categories/')}}">{{ $subcatee->name }}<br></a> 
                        </div>
                    @endforeach
                </div>
                    <div class="text-center">
                    </div>
            </div>
        </div>
    </div>
@endsection