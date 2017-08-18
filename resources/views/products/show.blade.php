@extends('layouts.master')

@section('title', '| View Product')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-0">
            <div class="panel panel-primary">
                <div class="panel panel-heading">
                <h1>{{ $product->name }}</h1></div>
                <div class="panel panel-body">
                    <strong>By</strong> <a href="">{{$product->manufacturer}}</a><br>
                    <h3>{{$product->cost}} Shs</h3>
                      <hr>  <p class="lead">{{ $product->body }} </p><hr>
                </div>
            </div>
        </div>
        <div class="col-md-7 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Image Here!</h3></strong></div>
                <div class="panel-body">
         
                </div>
            </div>
        </div>

    </div>
</div>

@endsection