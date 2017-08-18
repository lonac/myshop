@extends('layouts.master')

@section('title', '| View Category')

@section('content')

<div class="container">
    <div class="row">
            <div class="col-md-10 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>
                        {{ $cat->name }}
                            @can('Edit Category')
                                    <a href="{{ route('categories.edit', $cat->id) }}" class="btn btn-info" role="button">Edit</a>
                             @endcan
                        </strong></div>
                        <div class="panel-body"> 
                            @if(!$subcat->isEmpty())
                                @foreach($subcat as $subcatee)
                                <a href="{{ url('categories/'.$cat->id.'/subcategories/'.$subcatee->id) }}">{{$subcatee->name}}</a>
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
                 </div>
             </div>
    </div>
</div>

@endsection