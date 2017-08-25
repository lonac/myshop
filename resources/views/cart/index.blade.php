@extends('layouts.master')

@section('title','Cart')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>My Cart</h1></div>
                        <div class="panel-body">
                        @if($mycarts->count()>0)
                        <table class="table table-hover">
                            <thead>
                                <tr>     
                                    <th>Product Image</th>
                                    <th>Product Name</th>
                                    <th>Cost</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mycarts as $mycart)
                                    <tr>
                                        <td>--</td>
                                        
                                     </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="form-group">
                          <a href="{{url()}}" class="btn btn-success">Add Customer Details</button>     
                        </div>  

                        @else
                            <a href="{{url('/products')}}" type="button" class="btn btn-success">Shop Now?</a>
                        @endif
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
@endsection