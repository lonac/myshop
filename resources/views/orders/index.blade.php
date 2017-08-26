@extends('layouts.master')

@section('title','Orders')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h4>Orders</h4></div>
                        <div class="panel-body">
                            <div class="form-group">
                                @if($paymentmodes->count()>0)
                                    <div class="form-group">
                                        <label for="company">Choose Company</label>
                                        <select class="form-control" name="company">
                                            @foreach ($paymentmodes as $paymentmode)
                                                <option value="{{ $paymentmode->companyname}}">{{ $paymentmode->companyname}}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="reference">Reference Number:</label>
                                <input type="text" class="form-control" placeholder="e.g. BT55455552">
                            </div>

                            <div class="form-group">
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection