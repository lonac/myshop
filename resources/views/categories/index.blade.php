@extends('layouts.master')

@section('title','Categories')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">
                            @foreach ($cat as $catee)
                                <strong><a href="{{ route('categories.show', $catee->id ) }}">{{ $catee->name}}</a></strong>
                            @endforeach                   
                             </div>
                        <div class="panel-body">
                           
                        </div>
                    </div>
                    <div class="text-center">

                    </div>
            </div>
            </div>
        </div>
@endsection