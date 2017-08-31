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
                                <th>Product Name</th>             
                                     <th>Cost</th>
                                    <th>Quantity</th>           
                                    <th>Total Cost</th>
                                    <th>--- 
                                    </th>
                                    <th>nnnn</th>
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
                                        <?php
                                        $total_cost = ($product->cost) * 5;
                                            echo "$$$$$";

                                        ?>
                                    </td>
                                    <td>
                                     <img src="{{ asset('images/catalog/' .$product->name) }}" style="width:10%">
                                    </td>
                                 </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                          <button type="submit" class="btn btn-success">Add Product</button>     
                        </div>  
                    </div>

                </div>
                       
            </form>

        </div>
    </div>

@endsection