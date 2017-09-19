@extends('layouts.master')

@section('title', 'Product State')

@section('content')
    <div class="row">
        @can('Create Product')
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                   <h3> Add Product State</h3>
                </div>
                <div class="panel-body"> 
                    <form method="POST" action="{{ url('products/'.$product->id.'/productstate/create') }}">

                        {{ csrf_field() }}
                        <div class="form-group">
                            @if(session('status'))
                                <div class="alert alert-success">
                                    {{session('status')}}
                                </div>
                            @endif
                            <label for="state">Select State</label>
                            <select name="state" class="form-control">
                                <option>select</option><option value="new">NEW</option><option value="used">USED</option>
                           </select> 
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">SAVE DETAILS</button>
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
        @endcan
    </div>

@endsection