@extends('layouts.master')

@section('title', '| View Products')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
            <div class="panel panel-heading">
            <h2>
                {!! Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $product->id] ]) !!}
                {{ $product->name }}
                <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                @can('Edit Product')
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info" role="button">Edit</a>
                @endcan
                @can('Delete Product')
                 {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                @endcan
                {!! Form::close() !!}
            </h2>
            </div>    
            <div class="panel-body">
                <strong>By: </strong><a href=""> {{$product->manufacturer}}</a><br>
                <h2>{{$product->cost}} /= Tshs. </h2><br>
                <hr>
                  <p class="lead">{{ $product->body }} </p>
                <hr>
                <a href="" class="btn btn-info" role="button">Take Order</a>
            </div>
         </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-deafault">
                <div class="panel panel-heading">Images Here!</div>
                    <div class="panel panel-body">
                    </div>
            </div>

        </div>
    </div>

</div>

@endsection