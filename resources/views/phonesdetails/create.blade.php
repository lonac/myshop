@extends('layouts.master')

@section('title', 'Phone Specifications')

@section('content')
    <div class="row">
        @can('Create Product')
        <div class="col-md-6 col-md-offset-2">
            <h3>Here is for PHONES specifications ONLY, <a href="{{url('/products/'.$product->id)}}" class="btn btn-warning">SKIP?</a></h3>
            <div class="panel panel-info">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <div class="panel-heading">
                   <h4> Add Specifications for {{$product->name}}</h4>
                </div>
                <div class="panel-body"> 
                    <form method="POST" action="{{ url('products/'.$product->id.'/phonesdetails/create') }}">

                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="brand_name">Brand Name</label>
                            <input type="text" name="brand_name" id="brand_name" class="form-control" 
                            placeholder="e.g. nokia lumia, iphone 6s" />
                        </div>
                        <div class="form-group">
                            <label for="size">Size</label>
                            <input type="text" name="size" id="size" class="form-control" 
                            placeholder="5.2 * 2.5 * 5.3mm" />
                        </div>
                        <div class="form-group">
                            <label for="languages">Languages</label>
                            <input type="text" name="languages" id="languages" class="form-control" 
                            placeholder="languages" />
                        </div>
                        <div class="form-group">
                            <label for="cellular">Cellular</label>
                            <input type="text" name="cellular" id="cellular" class="form-control" 
                            placeholder="GSM/3G/LTE" />
                        </div>
                        <div class="form-group">
                            <label for="colors">Color(s)</label>
                            <input type="text" name="color" id="color" class="form-control" 
                            placeholder="black,blue,red" />
                        </div>
                        <div class="form-group">
                            <label for="rom">ROM</label>
                            <input type="text" name="rom" id="rom" class="form-control" 
                            placeholder="4G" />
                        </div>
                        <div class="form-group">
                            <label for="releasedate">Release Date</label>
                            <input type="text" name="releasedate" id="releasedate" class="form-control" 
                            placeholder="Product release date" />
                        </div>
                        <div class="form-group">
                            <label for="model">Model</label>
                            <input type="text" name="model" id="model" class="form-control" 
                            placeholder="" />
                        </div>
                         {{ Form::label('body','More Descriptions') }}
                        {{ Form::textarea('descriptions', null, array('class' => 'form-control')) }}
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">SAVE DETAILS</button>
                            <a href="{{url('/products/'.$product->id)}}" class="btn btn-warning btn-lg btn-block">DONE</a>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
        @endcan
    </div>

@endsection