@extends('layouts.master')

@section('title', ' Edit Details')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h3>Edit Customer's details</h3>
        <hr>
        <form method="POST" action="{{ url('customerdetails/edit') }}">

                        {{ method_field('patch') }}

                        {{ csrf_field() }}
          
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input class="form-control" name="firstname" value="{{$customerdetail->firstname}}">
            </div>

             <div class="form-group">
                <label for="middlename">Middle Name</label>
                <input class="form-control" name="middlename" value="{{$customerdetail->middlename}}">
            </div>

             <div class="form-group">
                <label for="lastname">Last Name</label>
                <input class="form-control" name="lastname" value="{{$customerdetail->lastname}}">
            </div>

             <div class="form-group">
                <label for="firstname">First Name</label>
                <input class="form-control" name="firstname" value="{{$customerdetail->firstname}}">
            </div>
            <br>

            {{ Form::label('address', 'Address') }}
            {{ Form::textarea('address', null, array('class' => 'form-control')) }}
            <br>

             <div class="form-group">
                <label for="region">Region</label>
                <input class="form-control" name="region" value="{{$customerdetail->region}}">
            </div>

             <div class="form-group">
                <label for="phonenumber1">Phone Number (1)</label>
                <input class="form-control" name="phonenumber1" value="{{$customerdetail->phonenumber1}}">
            </div>

            <div class="form-group">
                <label for="phonenumber2">Phone Number (2)</label>
                <input class="form-control" name="phonenumber2" value="{{$customerdetail->phonenumber2}}">
            </div>

            {{ Form::submit('Save Details', array('class' => 'btn btn-success btn-lg btn-block')) }}
      </form>
    </div>
</div>

@endsection