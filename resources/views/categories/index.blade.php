@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Categories</h3></div>
                    @foreach ($cat as $catee)
                        <div class="panel-body">
                            <li style="list-style-type:disc">
                                <a href="{{ route('categories.show', $catee->id ) }}"><b>{{ $catee->name }}</b><br> View/Add Sub-Categories
                                </a>
                            </li>
                        </div>
                    @endforeach
                    </div>
                    <div class="text-center">

                    </div>
                </div>
            </div>
        </div>
@endsection