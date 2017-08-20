@extends('layouts.master')

@section('title', '| View Cart')

@section('content')

<div class="container">

    @can('Delete Cart')
    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    @endcan
    {!! Form::close() !!}

</div>

@endsection