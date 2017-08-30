@extends('layouts.master')

@section('title','Cart')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <div class="panel panel-info">
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
                                        <td>
                                            <img src="{{ asset('images/catalog/' .$mycart->product_id) }}" class= "img-responsive style= height: 10px; width: 10px;">
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                        <form method="POST" action="{{ url('cart') }}"  onclick="return confirm('Remove Product from List');">
                                            {{ method_field('delete') }}

                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger">Remove</button>
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

            @if(!$customerdetail==null)
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h2>My Order:</h2></div>
                        <div class="panel-body">
                            <a href="{{url('orders/create')}}" class="btn btn-success">Place Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endif

        </div>
@endsection