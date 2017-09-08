@extends('layouts.master')

@section('title', '| Edit Specifications')

@section('content')
<div class="row">

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">Edit Specifications:</div>
            <div class="panel-body">
                <form method="POST" action="{{url('products/'.$product->id.'/phonesdetails/edit')}}">
                        {{method_field('patch')}}
                        {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" name="size" id="size" class="form-control" value="{{$size->size}}" />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection