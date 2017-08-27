@extends('layouts.master')

@section('title','Payment on Orders')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h3>Orders</h3></div>
                        <div class="panel-body">
                            <h4><p>Review your <a href="{{url('cart/show')}}">Cart Products</a> in here before making Payments</p>
                            <p>Review the <a href="{{url('customerdetails/show')}}">Buyer's Details</a> in Here</p></h4>
                        </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h3>Payments for your Order!</h3></div>
                    <div class="panel-body">
                        <form method="POST" action="{{url('orders/create')}}">  
                            {{ csrf_field()}}
                            <div class="form-group">
                                <p><strong>Make Sure the Names and Account Number displayed Corresponds!</strong></p>
                                @if($paymentmodes->count()>0)
                                    <div class="form-group">
                                        <label for="company">Choose Company</label>
                                        <select class="form-control" name="company">
                                            @foreach ($paymentmodes as $paymentmode)
                                                <option value="{{ $paymentmode->companyname}}">{{ $paymentmode->companyname}} -
                                                    {{ $paymentmode->accountnumber}} -  {{ $paymentmode->accountname}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="reference">Reference Number</label>
                                <input type="text" class="form-control" placeholder="e.g. BT55455552" name="reference">
                            </div>
                            <div class="form-group">
                               <h4> <div class="checkbox">
                                <label>
                                    <input type="checkbox">Check to Agree on <a href="">terms&condition</a> for KKOO
                                </label>
                                </div></h4>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection