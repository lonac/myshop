@extends('layouts.master')

@section('title', '| Edit State')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
       @if(session('status'))
              <div class="alert alert-success">
                {{session('status')}}
              </div>
        @endif
        <div class="panel panel-info">
            <div class="panel-heading">Edit Product State:</div>
            <div class="panel-body">
                <form method="POST" action="{{url('products/'.$product->id.'/productstate/edit')}}">
                        {{method_field('patch')}}
                        {{csrf_field()}}
                    <div class="form-group">
                            <label for="state">Select State</label>
                            <select name="state" class="form-control">
                                <option>select</option><option value="new">NEW</option><option value="used">USED</option>
                           </select> 
                        </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection