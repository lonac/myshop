@extends('layouts.master')

@section('title', '| Dimensions')

@section('content')

<div class='col-lg-4 col-lg-offset-4'>

    <h1><i class='fa fa-key'></i> Dimensions</h1>
    <br>

    @if(!$dimension->isEmpty())
        @foreach($dimension as $dimee)
            {{$dimee->size}}<br>
        @endforeach
    @endif

</div>

@endsection
