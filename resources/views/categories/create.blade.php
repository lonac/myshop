@extends('layouts.master')

@section('title', 'Add new Category')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <h1>Add New Category</h1>
        <hr>

    {{-- Using the Laravel HTML Form Collective to create our form --}}
        {{ Form::open(array('route' => 'categories.store')) }}

        <div class="form-group">
            {{ Form::label('name', 'Category Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::submit('Add Category', array('class' => 'btn btn-success btn-lg btn-block')) }}
            {{ Form::close() }}
        </div>
        </div>
    </div>

@endsection