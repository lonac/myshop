
@extends('layouts.master')

@section('title', '| View Products')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="panel panel-info">
            <div class="panel panel-heading">
            <h2>
                {!! Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $product->id] ]) !!}
                {{ $product->name }}
                <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                @can('Edit Product')
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-info" role="button">Edit</a>
                @endcan
                @can('Delete Product')
                 {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                @endcan
                {!! Form::close() !!}
            </h2>
            </div>    
            <div class="panel-body">
                <strong>By: </strong><font color="blue"> {{$product->manufacturer}}</font><br>
                <h2>{{$product->cost}}/= Tshs. /item</h2><br>
                 @if(session('status'))
                            <div class="alert alert-danger">
                                {{session('status')}}
                            </div>
                        @endif
                <hr>
                  <form method="post" action="{{url('products/'.$product->id) }}">

                    {{ csrf_field() }}

                @if($places->count()>0)
                    <div class="form-group">
                        <label for="place">Place</label>
                        <select name="place">
                            @foreach($places as $placee)
                                <option value="{{$placee->name}}">{{$placee->name}}</option>
                            @endforeach
                        </select>
                        <label for="Quantity">Quantity:</label>
                            <input type="number" name="quantity" value="1">
                            {{ Form::submit('Check  Cost', array('class' => 'btn btn-success')) }}
                    </div>
                @else
                    @can('Create Category')
                         <strong><a href="{{url('/reachableplaces/create')}}">Add Place first</a></strong>
                     @endcan
                @endif
                    <div class="form-group">
                        <a href="{{ url('/products/'.$product->id.'/cart/create') }}" class="btn btn-primary btn-lg btn-block" role="button">Add To Cart</a>
                    </div>
                  </form>


                  <form>

                    <div class="form-group">
                       <h3><label for="payment">Payment Modes</label></h3>
                       @if($paymentmodes->count()>0)
                           @foreach ($paymentmodes as $paymentmode)
                                <strong>Company Name:</strong>{{ $paymentmode->companyname}}
                                <br>                
                            @endforeach
                        @endif
                    </div>

                    <div class="form-group">
                       <h2> <label for="protection">Customer Protection</label></h2>
                        If the product is from china,it will take up to 30 days and if it is  Tanzania, it will take up to 3days!
                    </div>

                    <div class="form-group">
                        <h3><label for="policy">Return Policy</label></h3>
                        <p>The product will be returned in 5 days after receiving if it is not the one ordered!</p>                 
                    </div>
                  </form>
            </div>
         </div>
        </div>
        <div class="col-md-5">
            <div class="panel panel-info">
                <div class="panel panel-heading"></div>
                <div class="body">
                    <img src="{{ asset('images/catalog/' .$product->name) }}" height="500" width="400">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form>
                <div class="panel panel-default">
                    <div class="panel panel-heading">Item Details:</div>
                    <div class="panel-body">
                        <strong>Manufacturer:</strong> {{$product->manufacturer}}<br>
                        <strong>Model:</strong>
                    </div>
                </div>
            </form>
            <form>
                <div class="panel panel-default">
                    <div class="panel panel-heading">Item Specifications:</div>
                    <div class="panel-body">
                        @if($phonedetails!==null)
                            @include('phonesdetails._table_form')
                        @endif
                    </div>
                </div>
            </form>

            <form>
                <div class="panel panel-default">
                    <div class="panel panel-heading">Item Descriptions:</div>
                    <div class="panel-body">
                       {{$product->body}}
                    </div>
                </div>
            </form>

            <form>
                <div class="panel panel-default">
                    <div class="panel panel-heading">Package Description:</div>
                    <div class="panel-body">
                        <strong>Package size:</strong><br>
                        <strong>Package Weight:</strong><br>

                    </div>
                </div>
            </form>

        </div>
    </div>

</div>

@endsection