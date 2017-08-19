@extends('layouts.master')

@section('title', '| View Products')

@section('content')

<div class="container">

    <h1>{{ $product->name }}</h1>
    <hr>
    <p class="lead">{{ $product->body }} </p>
    <hr>
    {!! Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $product->id] ]) !!}
    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
    @can('Edit Product')
        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info" role="button">Edit</a>
    @endcan
    @can('Delete Product')
     {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    @endcan
    {!! Form::close() !!}

</div>

@endsection