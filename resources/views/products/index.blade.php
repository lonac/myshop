@extends('layouts.master')

@section('title','KKOO')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>
                            {{$category->name}}>{{$subcategory->name}}
                        </strong>
                    </div>
                    <div class="panel-body">
           
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection