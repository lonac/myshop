@extends('layouts.master')

@section('title', '| Payment Mode')

@section('content')

<div class="container">
    <div class="row">
            <div class="col-md-10 col-md-offset-0">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <strong>
                        {{ $paymentmode->companyname }}
                            @can('Edit Category')
                                    <a href="{{ route('paymentmodes.edit', $paymentmode->id) }}" class="btn btn-info" role="button">Edit</a>
                             @endcan
                        </strong>


                            {!! Form::open(['method' => 'DELETE', 'route' => ['paymentmodes.destroy', $paymentmode->id] ]) !!}
                            <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>

                            @can('Delete Category')
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            @endcan
                            {!! Form::close() !!}
                        </div>

                         <div class="panel-body"> 
                            <h2>Here is {{$paymentmode->companyname}} Mode</h2>
                                @if($paymentmodes->count()>0)
                                   @foreach ($paymentmodes as $paymentmode)
                                        <div class="panel-body">
                                            <li style="list-style-type:disc">
                                                <a href="{{ route('paymentmodes.show', $paymentmode->id ) }}"><b>{{ $paymentmode->companyname }}</b><br>
                                                    <p class="teaser">
                                                      <strong>Company Name:</strong>{{ $paymentmode->companyname}}
                                                        <br>
                                                        <strong>Account Name:</strong>{{ $paymentmode->accountname}}
                                                        <br>
                                                        <strong>Account Number:</strong>{{ $paymentmode->accountnumber}}
                                                        <br>
                                                    </p>
                                                </a>
                                            </li>
                                        </div>
                                    @endforeach
                                @else
                                    <p>No paymentmodes in Here</p>
                                @endif
                        </div>
                 </div>
             </div>
    </div>
</div>

@endsectionpaymentmode