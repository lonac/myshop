@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Sub Categories</h3></div>
                    @foreach ($subcat as $subcatee)
                        <div class="panel-body">
                            <li style="list-style-type:disc">
                                <a href="{{ route('subcategories.show', $subcatee->id ) }}"><b>{{ $subcatee->name }}</b><br>
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