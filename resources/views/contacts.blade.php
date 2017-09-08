@extends('layouts.master')

@section('title','Contacts')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-offset-0">
                <div class="panel panel-info">
                <div class="panel-heading"><h4>Categories</h4></div>
                    <div class="panel-body">
                        @if($categories->count()>0)
                            @foreach($categories as $category)
                                <a href="{{url('categories/'.$category->id)}}">{{$category->name}}</a><br>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-md-9 col-md-offset-0">
                <div class="panel panel-info">
                <div class="panel-heading"><h4>KKOOTZ Service Center</h4></div>
                    <div class="panel-body">
                        <p>You can contact KKOOTZ through our Agents at:</p>
                        <label>DAR ES SALAAM:</label><br>
                        <label>DODOMA</label><br>
                        <label>MOSHI</label><br>
                        <label>MOROGORO</label><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection