@extends('layouts.master')

@section('title', '| Add Sub Category')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{$category->name}} Category</h1>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Add subcategory:</h3>
                </div>
                <div class="panel-body"> 
                    <form method="POST" action="{{ url('categories/'.$category->id.'/subcategories/create') }}">

                        {{ csrf_field() }}

                            <label for="subcategory">Subcategory Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="e.g. shirts" />
                        <button type="submit" class="btn btn-success">ADD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection