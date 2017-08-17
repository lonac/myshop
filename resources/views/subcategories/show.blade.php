@extends('layouts.master')

@section('title', '| View Subcategory')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default"><h1>{{ $cat->name }}</h1>
                <div class="panel panel-heading">Subcategories</div>
                <div class="panel panel-body">
                    <form method="POST" action="{{url('categories/'.$cat->id.'/subcategories/'.$subcategory->sub_id)}}">
                    {{ method_field('delete') }}
                        <h3>{{$subcategory->name}}</h3>
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection