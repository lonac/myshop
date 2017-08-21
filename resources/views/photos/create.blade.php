@extends('layouts.master')

@section('title', '| Add Photos')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <h1>Add Photos for {{$product->name}}</h1>
        <hr>
        <form method="POST" action="{{url('products/'.$product->id.'/photos/create')}}" enctype="multipart/form-data">
            <div class="form-group">
                {{ Form::label('filename', 'filename') }}
                {{ Form::text('filename', null, array('class' => 'form-control')) }}
                <br>

                {{ Form::label('photos', 'Choose File') }}
                {{ Form::file('photos', null, array('class' => 'form-control')) }}
                <br>

                {{ Form::submit('Upload File', array('class' => 'btn btn-success btn-lg btn-block')) }}
            </div>
        </form>
        
        </div>
    </div>

@endsection