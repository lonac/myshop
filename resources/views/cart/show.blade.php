@extends('layouts.master')

@section('title', '| View Cart')

@section('content')

<div class="container">

    <div class="row">
    	<div class="col-md-6 col-md-offset-2">
    		<div class="panel panel-info">
    			<div class="panel-heading">My Cart</div>
    			<div class="panel-body">
    				<form method="POST" action="{{url('/cart/'.$mycart->id)}}">
                       {{ method_field('delete') }}

                        <h2>If You Click On Delete the Product will be completely removed from the List</h2>

                          {{ csrf_field() }}
                        <div class="form-group">
                             <a href="{{ url()->previous() }}" class="btn btn-primary btn-lg">Go Back</a>
                            <button type="submit" class="btn btn-danger btn-lg" >Delete?</button>
                        </div>
                    </form>
    			</div>
    		</div>
    	</div>
    </div>

</div>

@endsection