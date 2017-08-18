@extends('layouts.master')

@section('title', '| View Product')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    <h1>{{ $product->name }}</h1></div>
                <div class="panel panel-body">
                        <hr>
                        <p class="lead">{{ $product->body }} </p>
                        <hr>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection