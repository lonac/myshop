@extends('layouts.master')

@section('title','Products')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Products</h3></div>
                    @foreach ($photos as $photo)
                        <img src="<?php echo asset("storage/app/$photo->filename")?>"></img>        
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
@endsection