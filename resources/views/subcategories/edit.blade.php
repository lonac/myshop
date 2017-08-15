@extends('layouts.app')

@section('title', '| Edit Subcategory')

@section('content')
<div class="row">

    <div class="col-md-8 col-md-offset-2">

        <h1>Edit Category</h1>
        <hr>
            {{ Form::model($subcat, array('route' => array('subcategories.update', $subcat->id), 'method' => 'PUT')) }}
            <div class="form-group">
            {{ Form::label('name', 'Subcategory Name') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}<br>
            
            {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}
          </div>
    </div>
</div>

@endsection