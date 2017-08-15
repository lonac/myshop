@extends('layouts.master')

@section('title', '| View Subcategory')

@section('content')

<div class="container">

    <h1>{{ $cat->name }}</h1>
    {!! Form::open(['method' => 'DELETE', 'route' => ['subcategories.destroy', $subcat->id] ]) !!}
    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
    @can('Edit Subcategory')
        <a href="{{ route('subcategories.edit', $subcat->id) }}" class="btn btn-info" role="button">Edit</a>
    @endcan
    @can('Delete Subcategory')
    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    @endcan
    {!! Form::close() !!}

</div>

@endsection