@extends('layouts.master')

@section('title','Cart')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>My Cart</h2></div>
                        <div class="panel-body">
                        @if($mycarts->count()>0)
                        <table class="table table-hover">
                            <thead>
                                <tr>     
                                    <th>Product Image</th>
                                    <th>Product Name</th>
                                    <th>Cost</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mycarts as $mycart)
                                    <tr>
                                        <td>--</td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                        <form method="POST" action="{{ url('products/'.$mycart->product_id.'/cart') }}"  onclick="return confirm('You are about to delete Company?');">
                                            {{ method_field('delete') }}

                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>     
                                        </td>
                                        
                                     </tr>
                                @endforeach
                            </tbody>
                        </table>

                        @else
                            <a href="{{url('/products')}}" type="button" class="btn btn-success">Shop Now?</a>
                        @endif
                        
                    </div>
                    </div>
                </div>
            </div>
           @if($mycarts->count()>0)
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h2>Buyer's Details:
                               <a href="{{'customerdetails/show'}}" class="btn btn-success">View Details</a></h2>
                             </div>
                         </div>
                    </div>
                </div>
            @endif

            @if(!@customerdetail==null)
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h2>My Order:</h2></div>
                        <div class="panel-body">
                            <a href="{{url('orders')}}" class="btn btn-success">Place Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endif

        </div>
@endsection