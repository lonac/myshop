@extends('layouts.master')

@section('title', '| View Category')

@section('content')

<div class="container">

    <h1>{{ $cat->name }}
        @can('Edit Category')
                <a href="{{ route('categories.edit', $cat->id) }}" class="btn btn-info" role="button">Edit</a>
         @endcan
    </h1>

    @if($subcat!==null)
        @foreach($subcat as $subcatee)
        <a href="{{ url('categories/'.$cat->id.'/subcategories/show') }}">{{$subcatee->name}}</a>
        @endforeach
    @endif

    {!! Form::open(['method' => 'DELETE', 'route' => ['categories.destroy', $cat->id] ]) !!}
    <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
    
    @can('Create Subcategory')
        <a href="{{ url('categories/'.$cat->id.'/subcategories/create') }}" class="btn btn-info" role="button">Add Subcategory</a>
    @endcan

    @can('Delete Category')
    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    @endcan
    {!! Form::close() !!}

</div>

@endsection