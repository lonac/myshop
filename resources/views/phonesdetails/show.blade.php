@extends('layouts.master')

@section('title', 'sizes')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-info">
                <div class="panel panel-heading"><h4>{{$size->size}} </h4> </div>         
                <div class="panel-body">
                   <h3><a href="{{url('/products/'.$size->product_id.'/clothsizes/'.$size->id.'/edit')}}" class="btn btn-primary btn-lg">Edit</a></h3>
                   <form method="POST" action="{{url('/products/'.$size->product_id.'/clothsizes/'.$size->id)}}">
                        {{method_field('delete')}}
                        {{csrf_field()}}
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger btn-lg">DELETE</button>
                        </div>
                   </form>           
                </div>
        </div>
    </div>
</div>
</div>

@endsection