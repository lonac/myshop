@extends('layouts.master')

@section('title','Cart')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form method="POST" action="{{ url('products/'.$product->id.'/cart/create') }}">
                {{ csrf_field() }}
                <div class="panel panel-info">
                    <div class="panel-heading"><h4>Add Products to Cart</h4></div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>  
                                    <th>Name</th>             
                                    <th>Cost</th>
                                    <th>Quantity</th>  
                                    <th>Region/city</th>         
                                    <th>--- 
                                    </th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$product->name}}</td>                                   
                                    <td>{{$product->cost}}</td>
                                    <td>
                                        <div class="form-group">
                                             <input type="number" class="form-control" name="quantity" value="1">
                                        </div>
                                    </td>    
                                    <td>
                                    @if($places->count()>0)
                                        <div class="form-group">
                                            <select class="form-control" name="place">
                                                @foreach ($places as $placee)
                                                    <option value="{{$placee->name}}">{{$placee->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @else
                                        @can('Create Category')
                                             <strong><a href="{{url('/reachableplaces/create')}}">Add Place first</a></strong>
                                         @endcan
                                    @endif
                                    </td>
                                    <td>
                                     <img src="{{ asset('images/catalog/' .$product->name) }}" style="width:10%">
                                    </td>
                                 </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                          <button type="submit" class="btn btn-success">Confirm Product</button>     
                        </div>  
                    </div>

                </div>
                       
            </form>

        </div>
    </div>

@endsection