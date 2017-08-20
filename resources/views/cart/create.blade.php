@extends('layouts.master')

@section('title','Cart')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <h1>Cart</h1>
        <hr>

    {{-- Using the Laravel HTML Form Collective to create our form --}}
        {{ Form::open(array('route' => 'cart.store')) }}

        <div class="form-group">
        
        </div>
        
        </div>
    </div>

@endsection