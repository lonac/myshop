@extends('layouts.master')

@section('title', '| Edit Category')

@section('content')
<div class="row">

    <div class="col-md-8 col-md-offset-2">

        <h1>Edit Category</h1>
        <hr>
            {{ Form::model($cat, array('route' => array('categories.update', $cat->id), 'method' => 'PUT')) }}
            <div class="form-group">
            {{ Form::label('name', 'Category Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}<br>
            
            {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}
          </div>
    </div>
</div>

@endsection