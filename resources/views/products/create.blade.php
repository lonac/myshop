@extends('layouts.master')

@section('title', '| Add new Product')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <h1>Add New Product</h1>
        <hr>

    {{-- Using the Laravel HTML Form Collective to create our form --}}
        {{ Form::open(array('route' => 'products.store')) }}

        <div class="form-group">
            {{ Form::label('title', 'Product Name') }}
            {{ Form::text('title', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::label('manufacturer', 'Manufacturer Name') }}
            {{ Form::text('manufacturer', null, array('class' => 'form-control')) }}
            <br>

            @if(!$category->isEmpty()) 
            <label for="categories">Choose Categories</label><br>
                @foreach ($category as $catee) 
                    {{ Form::checkbox('category[]',  $catee->id ) }}
                    {{ Form::label($catee->name, ucfirst($catee->name)) }}
                @endforeach
            @endif
            <br>

             {{ Form::label('cost', 'Product Cost') }}
            {{ Form::text('cost', null, array('class' => 'form-control')) }}
            <br>


             {{ Form::label('body', 'Post Body') }}
            {{ Form::textarea('body', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::submit('Add Product', array('class' => 'btn btn-success btn-lg btn-block')) }}
            {{ Form::close() }}
        </div>
        </div>
    </div>

@endsection