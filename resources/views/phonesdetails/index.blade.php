@extends('layouts.master')

@section('title','Specifications')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                @if($phonedetails!==null)
                <div class="panel panel-info">
                    <div class="panel-heading"><h4>Phones Specifications 
                     <strong><a href="{{url('products/'.$phonedetails->product_id.'/phonesdetails/edit')}}">Edit</a></strong></h4></div>
                        <div class="panel-body">
                          <table class="table table-hover">
                            <thead>
                                <th></th>
                                <th></th>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <label>Brand : </label>  {{$phonedetails->brand_name}}<br>
                                        <label>Model : </label>  {{$phonedetails->model}}<br>
                                        <label>Cellular : </label> {{{$phonedetails->cellular}}}<br>
                                        <label>Rom : </label> {{{$phonedetails->rom}}}<br>
                                        <label>Size : </label> {{{$phonedetails->size}}}<br>
                                    </td>
                                    <td>
                                        <label>Languages : </label> {{$phonedetails->languages}}<br>
                                        <label>Color : </label> {{$phonedetails->color}}<br>
                                        <label>Release Date : </label> {{{$phonedetails->releasedate}}}<br>
                                        <label>Descriptions : </label> {{$phonedetails->descriptions}}<br>
                                    </td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                </div>
                @endif
                    
            </div>
        </div>
    </div>
@endsection