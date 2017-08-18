@extends('layouts.master')

@section('title', '| View Subcategory')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel panel-heading">
                    <h2>{{$subcategory->name}}
                        @can('Create Product')
                            <a href="{{url('categories/'.$cat->id.'/subcategories/'.$subcategory->id.'/products/create')}}" 
                            class="btn btn-info" role="button">Add {{$subcategory->name}} </a>
                         @endcan
                    </h2> 
                    <a href="{{url('categories/'.$cat->id)}}">{{$cat->name}}</a> >
                    <a href="">{{$subcategory->name}}</a></div>
                    <form method="POST" action="{{url('categories/'.$cat->id.'/subcategories/'.$subcategory->sub_id)}}">
                        {{ method_field('delete') }}             
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                <div class="panel panel-body">
                    here is the list of {{$subcategory->name}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection