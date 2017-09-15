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
                        @Can('Create Post')
                     <strong><a href="{{url('products/'.$phonedetails->product_id.'/phonesdetails/edit')}}">Edit</a></strong></h4></div>
                       @endcan
                        <div class="panel-body">
                          @include('phonesdetails._table_form')
                        </div>
                </div>
                @endif
                    
            </div>
        </div>
    </div>
@endsection