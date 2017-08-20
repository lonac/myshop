@extends('layouts.master')

@section('title', '| View Products')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-5">
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
                  <form>
                    <div class="form-group">
                        {{ Form::label('region', 'Shipping Region') }}
                        {{ Form::text('region', null, array('class' => 'form-control')) }}
                        <br>

                        {{ Form::label('name', 'Product Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                        <br>
                        {{ Form::label('name', 'Product Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                        <br>
                        {{ Form::label('name', 'Product Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                        <br>
                        {{ Form::label('name', 'Product Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                        <br>
                    </div>
                  </form>
            </div>
         </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-deafault">
                <div class="panel panel-heading">Images Here!</div>
                    <div class="panel panel-body">
                    </div>
            </div>

        </div>
    </div>

</div>

@endsection