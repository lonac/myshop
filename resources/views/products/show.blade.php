@extends('layouts.master')

@section('title', '| View Products')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="panel panel-default">
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
                <h2>{{$product->cost}} /= Tshs. </h2><br>
                <hr>
                  <form method="POST" action="{{url('cart')}}">
                    {{ csrf_field() }}

                @if($places->count()>0)
                    <div class="form-group">
                        <label for="name">Shipping place</label>
                        <select class="form-control" name="name">
                            @foreach ($places as $placess)
                                <option value="{{$placess->name}}">{{$placess->name}}</option>
                            @endforeach
                        </select>
                    </div>
                @else
                    @can('Create Category')
                         <strong><a href="reachableplaces/create">Add Place first</a></strong>
                     @endcan
                @endif

                    <div class="form-group">
                        <label for="Quantity">Quantity:</label>
                            <input type="number" class="form-control" name="quantity" value="1">
                    </div>

                    <div class="form-group">
                        <label for="Region">Colors:</label>
                    </div>

                    <div class="form-group">       
                        <label for="totalcost">Total Cost:</label>
                    </div>

                    <div class="form-group">
                        <a href="{{url('/cart')}}" class="btn btn-primary">Add To Cart</a>
                    <button type="button" class="btn btn-success">Buy Item </button>                    
                    </div>
                  </form>

                  <form>
                    <div class="form-group">
                       <h3><label for="payment">Payment Mode:</label></h3>
                       @if($paymentmodes->count()>0)
                           @foreach ($paymentmodes as $paymentmode)
                                <strong>Company Name:</strong>{{ $paymentmode->companyname}}
                                <br>                
                            </div>
                            @endforeach
                        @endif
                    </div>

                    <div class="form-group">
                       <h2> <label for="protection">Customer Protection</label></h2>
                        here is the guarantee
                    </div>

                    <div class="form-group">
                        <h3><label for="policy">Return Policy</label></h3>
                        here is the return policy                    
                    </div>
                  </form>
            </div>
         </div>
        </div>
        <div class="col-md-7">
            <div class="panel panel-deafault">
                <div class="panel panel-heading">Images Here!</div>
                    <div class="panel panel-body">
                        @foreach ($productpictures as $productpicture)
                          <img src="{{ asset('storage/' . $productpicture->filename) }}" alt="">
                        @endforeach
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