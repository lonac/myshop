@extends('layouts.master')

@section('title','Cart')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <h1>Cart</h1>
        <hr>
            <form method="POST" action="{{ url('products/'.$product->id.'/cart/create') }}">
                {{ csrf_field() }}
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>     
                                    <th>
                                        <img src="{{ asset('images/catalog/' .$product->name) }}" class= "img-responsive style= height: 10px; width: 10px;">
                                    </th>
                                    <th>Product Name</th>
                                    <th>Cost</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>img</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->cost}}</td>
                                     </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                          <button type="submit" class="btn btn-success">Save Product</button>     
                        </div>  
                    </div>

                </div>
                       
            </form>

        </div>
    </div>

@endsection