@extends('layouts.master')

@section('title', 'Dimensions Category')

@section('content')

<div class='col-lg-8 col-lg-offset-1'>
    <div class="panel panel-info">
        <div class="panel-heading"><h2>Choose Dimensions Category</h2></div>
        <div class="panel-body">
            <form method="POST" action="{{url('products/'.$product->id.'/dimensions/create')}}">
                {{ csrf_field()}}
                <div class="form-group">
                    <label>Select Product's dimension to be added</label>
                    <select name="category" class="form-control">
                        <option value="clothes">CLOTHES</option>
                        <option value="shoes">SHOES</option>
                    </select>
                </div>
                <div class="form-group">
                        <button type="submit" class="btn btn-success btn-lg btn-block">Add Category on Product</button>
                        <a href="{{url('products/'.$product->id.'/phonesdetails/create')}}" class="btn btn-warning btn-lg btn-block">SKIP STAGE</a>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
