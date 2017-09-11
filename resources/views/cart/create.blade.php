@extends('layouts.master')

@section('title','Cart')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <form method="POST" action="{{ url('products/'.$product->id.'/cart/create') }}">
                {{ csrf_field() }}
                <div class="panel panel-info">
                    <div class="panel-heading"><h4>Product added to Cart</h4></div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>  
                                    <th>Product</th>
                                    <th>Name</th>             
                                    <th>Cost</th>           
                                    <th>Size</th>      
                                    <th>Quantity</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="{{ asset('images/catalog/' .$product->name) }}" width="30" height="30">
                                    </td>
                                    <td>{{$product->name}}</td>                                   
                                    <td>{{$product->cost}}</td>                      
                                    <td>
                                    @if($sizes->count()>0)
                                        <div class="form-group">
                                            <select class="form-control" name="size">
                                                @foreach ($sizes as $size)
                                                    <option value="{{$size->size}}">{{$size->size}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    
                                    @elseif($clothsize->count()>0)
                                        <div class="form-group">
                                            <select class="form-control" name="size">
                                                @foreach ($clothsize as $size)
                                                    <option value="{{$size->size}}">{{$size->size}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @endif
                                    
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <input type="number" class="form-control" name="quantity" value="1">
                                            </div>
                                        </div>
                                    </td>  
                                   
                                 </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                          <button type="submit" class="btn btn-success">Place Order</button>     
                        </div>  
                    </div>

                </div>
                       
            </form>

        </div>
    </div>

@endsection